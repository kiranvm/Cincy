#!flask/bin/python
from sqlalchemy import Column, Integer, String, Boolean, ForeignKey
from sqlalchemy.ext.declarative import declarative_base
from sqlalchemy.orm import relationship, sessionmaker
from sqlalchemy import create_engine

Base = declarative_base()

#adding events to database
class Events(Base):
   __tablename__ = 'Events'
   id = Column('event_id', Integer, primary_key = True)
   name = Column(String(100))
   date = Column(String(100))
   description = Column(String(200))
   contact = Column(String(200))
   organiser = Column(String(200))
   time = Column(Integer)
   location = Column(String(50))

   @property
   def serialize(self):
        return {
            'id': self.id,
            'name': self.name,
	    'date' : self.date,
	    'description': self.description,
            'contact': self.contact,
	    'organiser' : self.organiser,        
	    'time' : self.time,
            'location' : self.location
	}

#locations
class Locations(Base):
   __tablename__ = 'Locations'
   id = Column('locations_id', Integer, primary_key = True)
   name = Column(String(100))
   description = Column(String(200))
   latitude = Column(String(200))
   longitude = Column(String(200))

   @property
   def serialize(self):
        return {
            'id': self.id,
            'name': self.name,
	    'description': self.description,
            'latitude': self.latitude,
	    'longitude' : self.longitude,        
	}

#users
class Users(Base):
   __tablename__ = 'Users'
   id = Column('user_id', Integer, primary_key = True)
   name = Column(String(100))
   email = Column(String(100))
   persona = Column(String(100))
   queries = Column(String(200))
   items = Column(String(200))

   @property
   def serialize(self):
        return {
            'id': self.id,
            'name': self.name,
	    'email' : self.email,
	    'persona': self.persona,
            'queries': self.queries,
	    'items' : self.items
	}

#FAQs
class Faqs(Base):
   __tablename__ = 'Faqs'
   id = Column('faq_id', Integer, primary_key = True)
   question = Column(String(100))
   answer = Column(String(200))

   @property
   def serialize(self):
        return {
            'id': self.id,
            'question': self.question,
	    'answer' : self.answer
	}

#faculty
class Faculties(Base):
   __tablename__ = 'Faculties'
   id = Column('faculty_id', Integer, primary_key = True)
   name = Column(String(100))
   officehours = Column(String(200))
   emailid = Column(String(500))

   @property
   def serialize(self):
        return {
            'id': self.id,
            'name': self.name,
	    'officehours' : self.officehours,
            'emailid' : self.emailid
	}


engine = create_engine('sqlite:///items_temp_data.db')

Base.metadata.create_all(engine)
