from sqlalchemy import create_engine
from sqlalchemy.orm import sessionmaker
from models import Base, Events, Locations, Users, Faculties

engine = create_engine('sqlite:///items_temp_data.db')
Base.metadata.bind = engine
DBSession = sessionmaker(bind=engine)
session = DBSession()

f1 = Faculties(name='persona_name',
             officehours='faculty_officehours',
	     emailid='faculty_emailid')
session.add(f1)
session.commit()
