#!flask/bin/python
from flask import (
		Flask, 
		jsonify,
		request
)
#from flask_sqlalchemy import SQLAlchemy
#DB Imports
from sqlalchemy import create_engine
from sqlalchemy.orm import sessionmaker
from models import (
		Base, 
		Events, 
		Locations, 
		Faqs, 
		Users, 
        Faculties
		)
#import json

#db access part
engine = create_engine('sqlite:///items_temp_data.db')
Base.metadata.bind = engine
DBSession = sessionmaker(bind=engine)
session = DBSession()

app = Flask(__name__)

success = [
    {
        'message': u'Success'
    }
]

noRecords = [
     {
	'message': u'No records present'
     }
]

'''
######################
locations API methods
######################
'''

@app.route('/sbuddy/api/v1.0/locations',methods=['GET'])
def get_locations():
    locations = session.query(Locations).all()
    return jsonify(Catalog=[i.serialize for i in locations])


@app.route('/sbuddy/api/v1.0/locations/<int:location_id>', methods=['GET'])
def get_location(location_id):
    location = session.query(Locations).filter(locations.id == location_id).first()
    if location == None:
        abort(404)
    return jsonify(location.serialize) 

@app.route('/sbuddy/api/v1.0/add_locations',methods=['POST'])
def add_location():
   if request.method == 'POST':
    prom_name = request.form.get('name')
    prom_description = request.form.get('description')
    prom_latitude = request.form.get('latitude')
    prom_longitude = request.form.get('longitude')

    newlocation = Locations(name=prom_name, 
             description=prom_description,
             latitude = prom_latitude,
             longitude = prom_longitude)
   
    session.add(newlocation)
    session.commit()
    return jsonify({'response': success[0]})

@app.route('/sbuddy/api/v1.0/delete_location', methods=['POST'])
def delete_location():
    if request.method == 'POST':
      location = session.query(Locations).filter(locations.id == request.form.get('id')).first()
      if location == None:
        abort(404)
      session.delete(location)
      session.commit()
    return jsonify({'response': success[0]}) 

'''
######################
Events API methods
######################
'''

@app.route('/sbuddy/api/v1.0/events',methods=['GET'])
def get_events():
    list_events = session.query(Events).all()
    return jsonify(Catalog=[i.serialize for i in list_events])

@app.route('/sbuddy/api/v1.0/delete_event', methods=['POST'])
def delete_event():
    if request.method == 'POST':
      event = session.query(Events).filter(events.id == request.form.get('id')).first()
      if event == None:
        abort(404)
      session.delete(event)
      session.commit()
    return jsonify({'response': success[0]}) 

@app.route('/sbuddy/api/v1.0/add_events',methods=['POST'])
def add_event():
   if request.method == 'POST':
    event_name = request.form.get('name')
    event_date = request.form.get('date')
    event_description = request.form.get('description')
    event_contact = request.form.get('contact')
    event_organiser = request.form.get('organiser')
    event_time = request.form.get('time')
    event_location = request.form.get('location')

    newevent = events(name=event_name, date=event_date,
             description=event_description,
	     contact = event_contact,
             organiser = event_organiser,
             time = event_time,
             location = event_location)
   
    session.add(newevent)
    session.commit()
    return jsonify({'response': success[0]})

'''
######################
FAQs API methods
######################
'''
@app.route('/sbuddy/api/v1.0/add_faq',methods=['POST'])
def add_faq():
   if request.method == 'POST':
    faq_question = request.form.get('question')
    faq_answer = request.form.get('answer')

    newfaq = Faqs(name=faq_question,
             description=faq_answer)
    session.add(newfaq)
    session.commit()

    return jsonify({'response': success[0]})

@app.route('/sbuddy/api/v1.0/list_faqs',methods=['GET'])
def get_faqs():
    list_faqs = session.query(Faqs).all()

    return jsonify(Catalog=[i.serialize for i in list_faqs])
    return jsonify({'response': success[0]})

@app.route('/sbuddy/api/v1.0/delete_faq', methods=['POST'])
def delete_faq():
    if request.method == 'POST':
      faq = session.query(Faqs).filter(faq.id == request.form.get('id')).first()
      if faq == None:
        abort(404)
      session.delete(faq)
      session.commit()
    return jsonify({'response': success[0]}) 

'''
######################
Dashboard API methods
######################
'''
@app.route('/sbuddy/api/v1.0/dashboard',methods=['GET'])
def get_dashboard():
    events_count = session.query(Events).count()
    locations_count = session.query(Locations).count()
    faqs_count = session.query(Faqs).count()
    users_count = session.query(Users).count()
    faculties_count = session.query(Faculties).count()    

    persona_list = session.query(Users.persona).distinct()

    results = {}

    for personas in persona_list:
      print (type(personas))
      #print (session.query(Users).filter_by(persona=personas).count())
      results["personas"] = {str(personas):session.query(Users).filter_by(persona=str(personas)).count()}

    results['event_count'] = events_count
    results['locations_count'] = locations_count
    results['faqs_count'] = faqs_count
    results['personas_count'] = personas_count
    
    return jsonify(results)
    #return jsonify(Catalog=[i.serialize for i in list_faqs])
    #return jsonify({'response': success[0]})

'''
######################
faculty API methods
######################
'''
@app.route('/sbuddy/api/v1.0/list_faculties',methods=['GET'])
def get_faculties():
    list_faculties = session.query(Faculties).all()
    return jsonify(faculties=[i.serialize for i in list_faculties])
    return jsonify({'response': success[0]})

@app.route('/sbuddy/api/v1.0/add_faculty',methods=['POST'])
def add_faculty():
   if request.method == 'POST':
    faculty_name = request.form.get('name')
    faculty_officehours = request.form.get('officehours')
    persona_emailid = request.form.get('emailid')

    newFaculty = Faculties(name=persona_name,
             officehours=faculty_officehours,
	     emailid=faculty_emailid)
    session.add(newFaculty)
    session.commit()
    return jsonify({'response': success[0]})

@app.route('/sbuddy/api/v1.0/delete_faculty', methods=['POST'])
def delete_faculty():
    if request.method == 'POST':
      faculty = session.query(faculties).filter(faculties.id == request.form.get('id')).first()
      if faculty == None:
        abort(404)
      session.delete(faculty)
      session.commit()
    return jsonify({'response': success[0]}) 

'''
######################
USERS API methods
######################

def add_user():
   if request.method == 'POST':
    user_name = request.form.get('name')
    user_email = request.form.get('email')
    user_persona = request.form.get('persona')
    user_queries = request.form.get('queries')

    newPersona = Personas(name=persona_name,
             description=persona_description,
	     tags=persona_tags)
    session.add(newPersona)
    session.commit()
    return jsonify({'response': success[0]})
'''

if __name__ == '__main__':
	app.run(debug=True)
	
