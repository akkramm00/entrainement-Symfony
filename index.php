
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

    <h2>Explication de la tache</h2>
    <p>
      Ici , nous utilisons le template de base fourni avec Symfony. Ce fichier se trouve dans le dossier "/src/template". Par defaut , la  méthode "rende" cherchera les templates dans ce dossier. Ainsi, si un template se trouve à la racine de ce dossier, il n'est pas nécessiare de donner toute l'arborescense.

      Pour préciser les paramètres que vous souhaitons passer à notre vue, la méthode render attend un tableau assocatif, contenant en clé l'indentifiant du paramùètre que nous ouhaitons utiliser dans notre vue, et en valeur la vairiable provenant de notre controller.
    </p>
 
  </body>
</html>