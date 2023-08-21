
<!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <title>{% block title %}Cotroller{% endblock %}</title>
    <link rel="icon" href="">
    {% block stylsheets %}
      {{ encore_entry_link_tags('app') }}
    {% endblock %}
    
    {% block javascripts %}
      {{ encore_entry_link_tags('app') }}
    {% endblock %}
    
  </head>
  <body>
    
 {% block body %}
    <h1> Votre numéro porte-bonheur est le {{ number }}</h1>
 {% endblock  %}
 
  </body>
</html>