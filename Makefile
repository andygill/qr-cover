BOOTSTRAP=bootstrap-3.3.6-dist

boot::
#	(cd generator ; ln -fs ../$(BOOTSTRAP)/css )
#	(cd generator ; ln -fs ../$(BOOTSTRAP)/js )
#	(cd generator ; ln -fs ../$(BOOTSTRAP)/fonts )		


create::
	echo 'CREATE TABLE Events (Id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, Name TEXT, Assignment TEXT, Remote TEXT, timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL);' | sqlite3 database.sdb


show::
	bash -c "echo -e '.headers on \n.mode column \nselect * from Events;'"  | sqlite3 database.sdb

