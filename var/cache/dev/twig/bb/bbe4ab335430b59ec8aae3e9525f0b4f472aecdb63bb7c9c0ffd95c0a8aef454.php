<?php

/* AnnuaireBundle:Default:index.html.twig */
class __TwigTemplate_7d154de4861acdce2770ee65eeeaf2f1662f5d833be92950ac3ed3f13a68e43a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AnnuaireBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2507a1554782270dfa0dc89143c266c37701ec73317df99ad19545866647940b = $this->env->getExtension("native_profiler");
        $__internal_2507a1554782270dfa0dc89143c266c37701ec73317df99ad19545866647940b->enter($__internal_2507a1554782270dfa0dc89143c266c37701ec73317df99ad19545866647940b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnuaireBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2507a1554782270dfa0dc89143c266c37701ec73317df99ad19545866647940b->leave($__internal_2507a1554782270dfa0dc89143c266c37701ec73317df99ad19545866647940b_prof);

    }

    // line 2
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_666d82441ddd7cf61ca083341ee1b5c3db599f5e3a55b85b7c5f0940ac37a21e = $this->env->getExtension("native_profiler");
        $__internal_666d82441ddd7cf61ca083341ee1b5c3db599f5e3a55b85b7c5f0940ac37a21e->enter($__internal_666d82441ddd7cf61ca083341ee1b5c3db599f5e3a55b85b7c5f0940ac37a21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 3
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("annuaireempty");
        echo "\">Annuaire</a></li>
";
        
        $__internal_666d82441ddd7cf61ca083341ee1b5c3db599f5e3a55b85b7c5f0940ac37a21e->leave($__internal_666d82441ddd7cf61ca083341ee1b5c3db599f5e3a55b85b7c5f0940ac37a21e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_84e2d2410b75ca72269a15ddc615b45be57290ed956c375403091d05649bfc17 = $this->env->getExtension("native_profiler");
        $__internal_84e2d2410b75ca72269a15ddc615b45be57290ed956c375403091d05649bfc17->enter($__internal_84e2d2410b75ca72269a15ddc615b45be57290ed956c375403091d05649bfc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h2 class=\"page-header\">ANNUAIRE</h2>
    <div class=\"panel panel-default\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">Rechercher</div>
        <div style=\"margin: 10px 10px;\">
             <div class=\"row\">
                 <div class=\"col-md-4\">
                     ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                 </div>
                <div class=\"col-md-4\">
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                </div>
                <div class=\"col-md-4\">
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
          </div>
     </div>

    <div class=\"panel panel-default\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">Annuaire</div>

    <table class=\"table table-striped table-bordered\">
        <thead>
        <tr>
            <th>Photo</th>
            <th>Username</th>
            <th>Roles</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Sexe</th>
            <th>Salaire</th>
            <th>Contrat</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            echo "            <tr>
                <th><div class=\"littleImg\"><img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute(            // line 48
$context["user"], "salarie", array()), "img", array()))), "html", null, true);
            echo "\"
                                                                alt=\"photo\"
                                                style=\"margin: 0 auto;\"
                        ></div></th>
                <th scope=\"row\"><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></th>
                <td>
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 55
                echo "                        ";
                if (($context["role"] == "ROLE_USER")) {
                    // line 56
                    echo "                        ";
                } elseif (($context["role"] == "ROLE_ADMIN")) {
                    // line 57
                    echo "                            <span class=\"label label-black\">ADMIN</span>
                        ";
                } elseif ((                // line 58
$context["role"] == "ROLE_FORMATEUR")) {
                    // line 59
                    echo "                            <span class=\"label label-warning\">FORMATEUR</span>
                        ";
                } elseif ((                // line 60
$context["role"] == "ROLE_MODERATEUR")) {
                    // line 61
                    echo "                            <span class=\"label label-danger\">MODERATEUR</span>
                        ";
                } elseif ((                // line 62
$context["role"] == "ROLE_RH")) {
                    // line 63
                    echo "                            <span class=\"label label-success\">RH</span>
                        ";
                }
                // line 65
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                </td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "sexe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "salaire", array()), "html", null, true);
            echo " €</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "typeContrat", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                btn-info btn-sm\">Details</a>

                    ";
            // line 76
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_RH"))) {
                // line 77
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editprofil", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\"
                       class=\"btn
                    btn-default
                    btn-sm\">Edit</a>
                    <a href=\"\" class=\"btn  btn-danger btn-sm\">Remove</a>
                    ";
            }
            // line 83
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "        </tbody>
    </table>
</div>
    <nav>
        <ul class=\"pagination\">
            <li
                ";
        // line 92
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == 1)) {
            // line 93
            echo "                    class=\"disabled\"
                ";
        }
        // line 95
        echo "            >
                <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
        echo "\"
                   aria-label=\"Previous\"
                >
                    <span aria-hidden=\"true\">&laquo;</span>
                </a>
            </li>
            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxpage"]) ? $context["maxpage"] : $this->getContext($context, "maxpage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 103
            echo "                ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == $context["i"])) {
                // line 104
                echo "                    <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                // line 105
                echo "</a></li>
                ";
            } else {
                // line 107
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "<span class=\"sr-only\">(current) </span></a></li>
                ";
            }
            // line 109
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "            <li
                ";
        // line 111
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["maxpage"]) ? $context["maxpage"] : $this->getContext($context, "maxpage")))) {
            // line 112
            echo "                    class=\"disabled\"
                ";
        }
        // line 114
        echo "            >
                <a href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
        echo "\"
                   aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
";
        
        $__internal_84e2d2410b75ca72269a15ddc615b45be57290ed956c375403091d05649bfc17->leave($__internal_84e2d2410b75ca72269a15ddc615b45be57290ed956c375403091d05649bfc17_prof);

    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e03a775a3c8da13670ce35492dc41a36d2427be3a3c5c95861af7504dd13b02 = $this->env->getExtension("native_profiler");
        $__internal_6e03a775a3c8da13670ce35492dc41a36d2427be3a3c5c95861af7504dd13b02->enter($__internal_6e03a775a3c8da13670ce35492dc41a36d2427be3a3c5c95861af7504dd13b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 125
        echo "    <script>
        \$(function() {
            var listUsername = [];
            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listusers"]) ? $context["listusers"] : $this->getContext($context, "listusers")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 129
            echo "                listUsername.push({ label : \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "nom", array()), "html", null, true);
            echo "\", value:
                        \"";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\"});
                listUsername.push({ label : \"";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "prenom", array()), "html", null, true);
            echo "\", value:
                    \"";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\"});
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "            \$( \"#form_recherche\" ).autocomplete({
                source: function(request, response) {
                    var results = \$.ui.autocomplete.filter(listUsername, request.term);
                    response(results.slice(0, 5));
                }
            });
        });
    </script>
";
        
        $__internal_6e03a775a3c8da13670ce35492dc41a36d2427be3a3c5c95861af7504dd13b02->leave($__internal_6e03a775a3c8da13670ce35492dc41a36d2427be3a3c5c95861af7504dd13b02_prof);

    }

    public function getTemplateName()
    {
        return "AnnuaireBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 134,  329 => 132,  325 => 131,  321 => 130,  316 => 129,  312 => 128,  307 => 125,  301 => 124,  286 => 115,  283 => 114,  279 => 112,  277 => 111,  274 => 110,  268 => 109,  260 => 107,  256 => 105,  251 => 104,  248 => 103,  244 => 102,  235 => 96,  232 => 95,  228 => 93,  226 => 92,  218 => 86,  210 => 83,  200 => 77,  198 => 76,  191 => 72,  187 => 71,  183 => 70,  179 => 69,  175 => 68,  171 => 67,  168 => 66,  162 => 65,  158 => 63,  156 => 62,  153 => 61,  151 => 60,  148 => 59,  146 => 58,  143 => 57,  140 => 56,  137 => 55,  133 => 54,  126 => 52,  119 => 48,  118 => 47,  115 => 46,  111 => 45,  83 => 20,  77 => 17,  71 => 14,  62 => 7,  56 => 6,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block breadcrumbs %}*/
/*     {{ parent() }}*/
/*     <li><a href="{{ path('annuaireempty') }}">Annuaire</a></li>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <h2 class="page-header">ANNUAIRE</h2>*/
/*     <div class="panel panel-default">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading">Rechercher</div>*/
/*         <div style="margin: 10px 10px;">*/
/*              <div class="row">*/
/*                  <div class="col-md-4">*/
/*                      {{ form_start(form) }}*/
/*                  </div>*/
/*                 <div class="col-md-4">*/
/*                     {{ form_widget(form) }}*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             </div>*/
/*           </div>*/
/*      </div>*/
/* */
/*     <div class="panel panel-default">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading">Annuaire</div>*/
/* */
/*     <table class="table table-striped table-bordered">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Photo</th>*/
/*             <th>Username</th>*/
/*             <th>Roles</th>*/
/*             <th>Nom</th>*/
/*             <th>Prénom</th>*/
/*             <th>Sexe</th>*/
/*             <th>Salaire</th>*/
/*             <th>Contrat</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*             <tr>*/
/*                 <th><div class="littleImg"><img src="{{ asset*/
/*                         ('img/users/' ~ user.salarie.img ) }}"*/
/*                                                                 alt="photo"*/
/*                                                 style="margin: 0 auto;"*/
/*                         ></div></th>*/
/*                 <th scope="row"><a href="{{ path('profiluser', {'id': user.id}) }}">{{ user.username }}</a></th>*/
/*                 <td>*/
/*                     {% for role in user.roles %}*/
/*                         {% if role == "ROLE_USER" %}*/
/*                         {% elseif role == "ROLE_ADMIN" %}*/
/*                             <span class="label label-black">ADMIN</span>*/
/*                         {% elseif role == "ROLE_FORMATEUR" %}*/
/*                             <span class="label label-warning">FORMATEUR</span>*/
/*                         {% elseif role == "ROLE_MODERATEUR" %}*/
/*                             <span class="label label-danger">MODERATEUR</span>*/
/*                         {% elseif role == "ROLE_RH" %}*/
/*                             <span class="label label-success">RH</span>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </td>*/
/*                 <td>{{ user.salarie.nom }}</td>*/
/*                 <td>{{ user.salarie.prenom }}</td>*/
/*                 <td>{{ user.salarie.sexe }}</td>*/
/*                 <td>{{ user.salarie.salaire }} €</td>*/
/*                 <td>{{ user.salarie.typeContrat }}</td>*/
/*                 <td><a href="{{ path('profiluser', {'id': user.id}) }}"*/
/*                        class="btn*/
/*                 btn-info btn-sm">Details</a>*/
/* */
/*                     {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_RH')%}*/
/*                     <a href="{{ path('editprofil', {'id': user.id}) }}"*/
/*                        class="btn*/
/*                     btn-default*/
/*                     btn-sm">Edit</a>*/
/*                     <a href="" class="btn  btn-danger btn-sm">Remove</a>*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/*     <nav>*/
/*         <ul class="pagination">*/
/*             <li*/
/*                 {% if page == 1 %}*/
/*                     class="disabled"*/
/*                 {% endif %}*/
/*             >*/
/*                 <a href="{{ path('annuaire', {'page': page-1}) }}"*/
/*                    aria-label="Previous"*/
/*                 >*/
/*                     <span aria-hidden="true">&laquo;</span>*/
/*                 </a>*/
/*             </li>*/
/*             {% for i in 1..maxpage %}*/
/*                 {% if page == i %}*/
/*                     <li class="active"><a href="{{ path('annuaire', {'page': i}) }}">{{ i*/
/*                             }}</a></li>*/
/*                 {% else %}*/
/*                     <li><a href="{{ path('annuaire', {'page': i}) }}">{{ i }}<span class="sr-only">(current) </span></a></li>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*             <li*/
/*                 {% if page == maxpage %}*/
/*                     class="disabled"*/
/*                 {% endif %}*/
/*             >*/
/*                 <a href="{{ path('annuaire', {'page': page+1}) }}"*/
/*                    aria-label="Next">*/
/*                     <span aria-hidden="true">&raquo;</span>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </nav>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script>*/
/*         $(function() {*/
/*             var listUsername = [];*/
/*             {% for user in listusers %}*/
/*                 listUsername.push({ label : "{{ user.salarie.nom }}", value:*/
/*                         "{{ user.username }}"});*/
/*                 listUsername.push({ label : "{{ user.salarie.prenom }}", value:*/
/*                     "{{ user.username }}"});*/
/*             {% endfor %}*/
/*             $( "#form_recherche" ).autocomplete({*/
/*                 source: function(request, response) {*/
/*                     var results = $.ui.autocomplete.filter(listUsername, request.term);*/
/*                     response(results.slice(0, 5));*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
