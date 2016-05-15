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
        $__internal_c14481cea4a446e181fe5a10e75241490b711ef2ba85b5e53fdb41128a4d204c = $this->env->getExtension("native_profiler");
        $__internal_c14481cea4a446e181fe5a10e75241490b711ef2ba85b5e53fdb41128a4d204c->enter($__internal_c14481cea4a446e181fe5a10e75241490b711ef2ba85b5e53fdb41128a4d204c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnuaireBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c14481cea4a446e181fe5a10e75241490b711ef2ba85b5e53fdb41128a4d204c->leave($__internal_c14481cea4a446e181fe5a10e75241490b711ef2ba85b5e53fdb41128a4d204c_prof);

    }

    // line 2
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_2e68d01e961ed05282fe0677f7c76ff18971dfc36e386c81023fffb6bbc1b100 = $this->env->getExtension("native_profiler");
        $__internal_2e68d01e961ed05282fe0677f7c76ff18971dfc36e386c81023fffb6bbc1b100->enter($__internal_2e68d01e961ed05282fe0677f7c76ff18971dfc36e386c81023fffb6bbc1b100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 3
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("annuaireempty");
        echo "\">Annuaire</a></li>
";
        
        $__internal_2e68d01e961ed05282fe0677f7c76ff18971dfc36e386c81023fffb6bbc1b100->leave($__internal_2e68d01e961ed05282fe0677f7c76ff18971dfc36e386c81023fffb6bbc1b100_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_04705769648c80adcd35a6106528ac92d562abd0b5a3adefe394d6dd8aaadc6e = $this->env->getExtension("native_profiler");
        $__internal_04705769648c80adcd35a6106528ac92d562abd0b5a3adefe394d6dd8aaadc6e->enter($__internal_04705769648c80adcd35a6106528ac92d562abd0b5a3adefe394d6dd8aaadc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 45
            echo "            <tr>
                <th><div class=\"littleImg\"><img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute(            // line 47
$context["user"], "salarie", array()), "img", array()))), "html", null, true);
            echo "\"
                                                                alt=\"photo\"
                                                style=\"margin: 0 auto;\"
                        ></div></th>
                <th scope=\"row\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</th>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "sexe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "salaire", array()), "html", null, true);
            echo " €</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "typeContrat", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                btn-info btn-sm\">Details</a>
                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editprofil", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                    btn-default
                    btn-sm\">Edit</a>
                    <a href=\"\" class=\"btn  btn-danger btn-sm\">Remove</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </tbody>
    </table>
</div>
    <nav>
        <ul class=\"pagination\">
            <li
                ";
        // line 74
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == 1)) {
            // line 75
            echo "                    class=\"disabled\"
                ";
        }
        // line 77
        echo "            >
                <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
        echo "\"
                   aria-label=\"Previous\"
                >
                    <span aria-hidden=\"true\">&laquo;</span>
                </a>
            </li>
            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxpage"]) ? $context["maxpage"] : $this->getContext($context, "maxpage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 85
            echo "                ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == $context["i"])) {
                // line 86
                echo "                    <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                // line 87
                echo "</a></li>
                ";
            } else {
                // line 89
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "<span class=\"sr-only\">(current) </span></a></li>
                ";
            }
            // line 91
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "            <li
                ";
        // line 93
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["maxpage"]) ? $context["maxpage"] : $this->getContext($context, "maxpage")))) {
            // line 94
            echo "                    class=\"disabled\"
                ";
        }
        // line 96
        echo "            >
                <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
        echo "\"
                   aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
";
        
        $__internal_04705769648c80adcd35a6106528ac92d562abd0b5a3adefe394d6dd8aaadc6e->leave($__internal_04705769648c80adcd35a6106528ac92d562abd0b5a3adefe394d6dd8aaadc6e_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c0ce53919b4943ebc13f90112d7773885a3be00c493c7ad1debf3621bb2bf615 = $this->env->getExtension("native_profiler");
        $__internal_c0ce53919b4943ebc13f90112d7773885a3be00c493c7ad1debf3621bb2bf615->enter($__internal_c0ce53919b4943ebc13f90112d7773885a3be00c493c7ad1debf3621bb2bf615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "    <script>
        \$(function() {
            var listUsername = [];
            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listusers"]) ? $context["listusers"] : $this->getContext($context, "listusers")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 111
            echo "                listUsername.push({ label : \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "nom", array()), "html", null, true);
            echo "\", value:
                        \"";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\"});
                listUsername.push({ label : \"";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "prenom", array()), "html", null, true);
            echo "\", value:
                    \"";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\"});
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "            \$( \"#form_recherche\" ).autocomplete({
                source: listUsername
            });
        });
    </script>
";
        
        $__internal_c0ce53919b4943ebc13f90112d7773885a3be00c493c7ad1debf3621bb2bf615->leave($__internal_c0ce53919b4943ebc13f90112d7773885a3be00c493c7ad1debf3621bb2bf615_prof);

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
        return array (  288 => 116,  280 => 114,  276 => 113,  272 => 112,  267 => 111,  263 => 110,  258 => 107,  252 => 106,  237 => 97,  234 => 96,  230 => 94,  228 => 93,  225 => 92,  219 => 91,  211 => 89,  207 => 87,  202 => 86,  199 => 85,  195 => 84,  186 => 78,  183 => 77,  179 => 75,  177 => 74,  169 => 68,  155 => 60,  149 => 57,  145 => 56,  141 => 55,  137 => 54,  133 => 53,  129 => 52,  125 => 51,  118 => 47,  117 => 46,  114 => 45,  110 => 44,  83 => 20,  77 => 17,  71 => 14,  62 => 7,  56 => 6,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
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
/*                     {{ form_start(form) }}*/
/*                  </div>*/
/*                 <div class="col-md-4">*/
/*                 {{ form_widget(form) }}*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                 {{ form_end(form) }}*/
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
/*                 <th scope="row">{{ user.username }}</th>*/
/*                 <td>{{ user.salarie.nom }}</td>*/
/*                 <td>{{ user.salarie.prenom }}</td>*/
/*                 <td>{{ user.salarie.sexe }}</td>*/
/*                 <td>{{ user.salarie.salaire }} €</td>*/
/*                 <td>{{ user.salarie.typeContrat }}</td>*/
/*                 <td><a href="{{ path('profiluser', {'id': user.id}) }}"*/
/*                        class="btn*/
/*                 btn-info btn-sm">Details</a>*/
/*                     <a href="{{ path('editprofil', {'id': user.id}) }}"*/
/*                        class="btn*/
/*                     btn-default*/
/*                     btn-sm">Edit</a>*/
/*                     <a href="" class="btn  btn-danger btn-sm">Remove</a>*/
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
/*                 source: listUsername*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
