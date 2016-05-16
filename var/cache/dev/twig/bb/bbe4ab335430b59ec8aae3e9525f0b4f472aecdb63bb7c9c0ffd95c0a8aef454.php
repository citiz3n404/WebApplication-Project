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
        $__internal_d642b47aa27306553c729bf0543fc9a41f3454634abc27a758d4c32657821235 = $this->env->getExtension("native_profiler");
        $__internal_d642b47aa27306553c729bf0543fc9a41f3454634abc27a758d4c32657821235->enter($__internal_d642b47aa27306553c729bf0543fc9a41f3454634abc27a758d4c32657821235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnuaireBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d642b47aa27306553c729bf0543fc9a41f3454634abc27a758d4c32657821235->leave($__internal_d642b47aa27306553c729bf0543fc9a41f3454634abc27a758d4c32657821235_prof);

    }

    // line 2
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_37aed4d5d0ee1d260eecae024e1a59a99ed0a93c79e3b2983d28910d09a221df = $this->env->getExtension("native_profiler");
        $__internal_37aed4d5d0ee1d260eecae024e1a59a99ed0a93c79e3b2983d28910d09a221df->enter($__internal_37aed4d5d0ee1d260eecae024e1a59a99ed0a93c79e3b2983d28910d09a221df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 3
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("annuaireempty");
        echo "\">Annuaire</a></li>
";
        
        $__internal_37aed4d5d0ee1d260eecae024e1a59a99ed0a93c79e3b2983d28910d09a221df->leave($__internal_37aed4d5d0ee1d260eecae024e1a59a99ed0a93c79e3b2983d28910d09a221df_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f103900f0a5585c6df2ba0cbf4a8625a361fdd31d42e1e3d73284d6a2f51a01 = $this->env->getExtension("native_profiler");
        $__internal_6f103900f0a5585c6df2ba0cbf4a8625a361fdd31d42e1e3d73284d6a2f51a01->enter($__internal_6f103900f0a5585c6df2ba0cbf4a8625a361fdd31d42e1e3d73284d6a2f51a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <th scope=\"row\"><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></th>
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

                    ";
            // line 61
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_RH"))) {
                // line 62
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editprofil", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\"
                       class=\"btn
                    btn-default
                    btn-sm\">Edit</a>
                    <a href=\"\" class=\"btn  btn-danger btn-sm\">Remove</a>
                    ";
            }
            // line 68
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
    </table>
</div>
    <nav>
        <ul class=\"pagination\">
            <li
                ";
        // line 77
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == 1)) {
            // line 78
            echo "                    class=\"disabled\"
                ";
        }
        // line 80
        echo "            >
                <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
        echo "\"
                   aria-label=\"Previous\"
                >
                    <span aria-hidden=\"true\">&laquo;</span>
                </a>
            </li>
            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxpage"]) ? $context["maxpage"] : $this->getContext($context, "maxpage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 88
            echo "                ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == $context["i"])) {
                // line 89
                echo "                    <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                // line 90
                echo "</a></li>
                ";
            } else {
                // line 92
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "<span class=\"sr-only\">(current) </span></a></li>
                ";
            }
            // line 94
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "            <li
                ";
        // line 96
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["maxpage"]) ? $context["maxpage"] : $this->getContext($context, "maxpage")))) {
            // line 97
            echo "                    class=\"disabled\"
                ";
        }
        // line 99
        echo "            >
                <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
        echo "\"
                   aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
";
        
        $__internal_6f103900f0a5585c6df2ba0cbf4a8625a361fdd31d42e1e3d73284d6a2f51a01->leave($__internal_6f103900f0a5585c6df2ba0cbf4a8625a361fdd31d42e1e3d73284d6a2f51a01_prof);

    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77206a1b79eeb06fbec8486f5bc125cfb70baee8040bce654c96bf06b1cd5446 = $this->env->getExtension("native_profiler");
        $__internal_77206a1b79eeb06fbec8486f5bc125cfb70baee8040bce654c96bf06b1cd5446->enter($__internal_77206a1b79eeb06fbec8486f5bc125cfb70baee8040bce654c96bf06b1cd5446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 110
        echo "    <script>
        \$(function() {
            var listUsername = [];
            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listusers"]) ? $context["listusers"] : $this->getContext($context, "listusers")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 114
            echo "                listUsername.push({ label : \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "nom", array()), "html", null, true);
            echo "\", value:
                        \"";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\"});
                listUsername.push({ label : \"";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "prenom", array()), "html", null, true);
            echo "\", value:
                    \"";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\"});
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "            \$( \"#form_recherche\" ).autocomplete({
                source: function(request, response) {
                    var results = \$.ui.autocomplete.filter(listUsername, request.term);

                    response(results.slice(0, 5));
                }
            });
        });
    </script>
";
        
        $__internal_77206a1b79eeb06fbec8486f5bc125cfb70baee8040bce654c96bf06b1cd5446->leave($__internal_77206a1b79eeb06fbec8486f5bc125cfb70baee8040bce654c96bf06b1cd5446_prof);

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
        return array (  297 => 119,  289 => 117,  285 => 116,  281 => 115,  276 => 114,  272 => 113,  267 => 110,  261 => 109,  246 => 100,  243 => 99,  239 => 97,  237 => 96,  234 => 95,  228 => 94,  220 => 92,  216 => 90,  211 => 89,  208 => 88,  204 => 87,  195 => 81,  192 => 80,  188 => 78,  186 => 77,  178 => 71,  170 => 68,  160 => 62,  158 => 61,  151 => 57,  147 => 56,  143 => 55,  139 => 54,  135 => 53,  131 => 52,  125 => 51,  118 => 47,  117 => 46,  114 => 45,  110 => 44,  83 => 20,  77 => 17,  71 => 14,  62 => 7,  56 => 6,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
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
/*                 <th scope="row"><a href="{{ path('profiluser', {'id': user.id}) }}">{{ user.username }}</a></th>*/
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
/* */
/*                     response(results.slice(0, 5));*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
