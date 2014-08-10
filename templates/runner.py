# -*- coding: utf-8 -*-
from jinja2 import Environment, PackageLoader
import sys
import os

sys.path.append('/Users/Blake/Sites')

env = Environment(loader=PackageLoader('maxweddingcars', 'templates'))

pages = ('index.php', 'contact.php', 'locations.php', 'vintage.php', 
    'seven_seat_mercedes.php', 'mercedes.php', 'send_form_email.php')
    
for page in pages:
    try:
        template = env.get_template(page)
        print 'Rendering %s'%(page)
    except Exception, e:
        print 'Template for %s unavailable'%(page)
        print e
        continue
    output = template.render()
    with open(os.path.join('..', page), "wb") as f:
        f.write(output)