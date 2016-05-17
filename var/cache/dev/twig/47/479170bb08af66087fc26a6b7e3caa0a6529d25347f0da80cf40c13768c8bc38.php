<?php

/* AnnuaireBundle:Default:index.html.twig */
class __TwigTemplate_a40f57f91aab485b33123e2ed269221e258e6ccbe9863d49445c3b737e8c0a54 extends Twig_Template
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
        $__internal_266d2bc266dae077c02c26b874cfc45f6f7c92c5cb3563695786cb70a0222e7b = $this->env->getExtension("native_profiler");
        $__internal_266d2bc266dae077c02c26b874cfc45f6f7c92c5cb3563695786cb70a0222e7b->enter($__internal_266d2bc266dae077c02c26b874cfc45f6f7c92c5cb3563695786cb70a0222e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnuaireBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_266d2bc266dae077c02c26b874cfc45f6f7c92c5cb3563695786cb70a0222e7b->leave($__internal_266d2bc266dae077c02c26b874cfc45f6f7c92c5cb3563695786cb70a0222e7b_prof);

    }

    // line 2
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_3e719d57dff0935db4e3affd35e1455d4caf7644ff927a05eea8198a20032ff7 = $this->env->getExtension("native_profiler");
        $__internal_3e719d57dff0935db4e3affd35e1455d4caf7644ff927a05eea8198a20032ff7->enter($__internal_3e719d57dff0935db4e3affd35e1455d4caf7644ff927a05eea8198a20032ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 3
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("annuaireempty");
        echo "\">Annuaire</a></li>
";
        
        $__internal_3e719d57dff0935db4e3affd35e1455d4caf7644ff927a05eea8198a20032ff7->leave($__internal_3e719d57dff0935db4e3affd35e1455d4caf7644ff927a05eea8198a20032ff7_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ee102ffeb1caee936a0b0e9a7f11ecd95b998be4991d693609b1bce3694a652 = $this->env->getExtension("native_profiler");
        $__internal_7ee102ffeb1caee936a0b0e9a7f11ecd95b998be4991d693609b1bce3694a652->enter($__internal_7ee102ffeb1caee936a0b0e9a7f11ecd95b998be4991d693609b1bce3694a652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                } elseif ((                // line 64
$context["role"] == "ROLE_GESTIONNAIRE")) {
                    // line 65
                    echo "                            <span class=\"label
                            label-primary\">GESTIONNAIRE</span>
                        ";
                }
                // line 68
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                </td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "sexe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "salaire", array()), "html", null, true);
            echo " €</td>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "typeContrat", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                btn-info btn-sm\">Details</a>

                    ";
            // line 79
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_RH"))) {
                // line 80
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editprofil", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\"
                       class=\"btn
                    btn-default
                    btn-sm\">Edit</a>
                    <a href=\"\" class=\"btn  btn-danger btn-sm\">Remove</a>
                    ";
            }
            // line 86
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "        </tbody>
    </table>
</div>
    <nav>
        <ul class=\"pagination\">
            <li
                ";
        // line 95
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == 1)) {
            // line 96
            echo "                    class=\"disabled\"
                ";
        }
        // line 98
        echo "            >
                <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
        echo "\"
                   aria-label=\"Previous\"
                >
                    <span aria-hidden=\"true\">&laquo;</span>
                </a>
            </li>
            ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxpage"]) ? $context["maxpage"] : $this->getContext($context, "maxpage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 106
            echo "                ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == $context["i"])) {
                // line 107
                echo "                    <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                // line 108
                echo "</a></li>
                ";
            } else {
                // line 110
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "<span class=\"sr-only\">(current) </span></a></li>
                ";
            }
            // line 112
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "            <li
                ";
        // line 114
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == (isset($context["maxpage"]) ? $context["maxpage"] : $this->getContext($context, "maxpage")))) {
            // line 115
            echo "                    class=\"disabled\"
                ";
        }
        // line 117
        echo "            >
                <a href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
        echo "\"
                   aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
";
        
        $__internal_7ee102ffeb1caee936a0b0e9a7f11ecd95b998be4991d693609b1bce3694a652->leave($__internal_7ee102ffeb1caee936a0b0e9a7f11ecd95b998be4991d693609b1bce3694a652_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_714ad9164d234fd53eddbe02b2623cc65c4b917b03d39cee50bb5a2d99753dcc = $this->env->getExtension("native_profiler");
        $__internal_714ad9164d234fd53eddbe02b2623cc65c4b917b03d39cee50bb5a2d99753dcc->enter($__internal_714ad9164d234fd53eddbe02b2623cc65c4b917b03d39cee50bb5a2d99753dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    <script>
        \$(function() {
            var listUsername = [];
            ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listusers"]) ? $context["listusers"] : $this->getContext($context, "listusers")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 132
            echo "                listUsername.push({ label : \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "nom", array()), "html", null, true);
            echo "\", value:
                        \"";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\"});
                listUsername.push({ label : \"";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "salarie", array()), "prenom", array()), "html", null, true);
            echo "\", value:
                    \"";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\"});
                listUsername.push({ label : \"";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\", value:
                    \"";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\"});
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "            \$( \"#form_recherche\" ).autocomplete({
                source: function(request, response) {
                    var results = \$.ui.autocomplete.filter(listUsername, request.term);
                    response(results.slice(0, 5));
                }
            });
        });
    </script>
";
        
        $__internal_714ad9164d234fd53eddbe02b2623cc65c4b917b03d39cee50bb5a2d99753dcc->leave($__internal_714ad9164d234fd53eddbe02b2623cc65c4b917b03d39cee50bb5a2d99753dcc_prof);

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
        return array (  351 => 139,  343 => 137,  339 => 136,  335 => 135,  331 => 134,  327 => 133,  322 => 132,  318 => 131,  313 => 128,  307 => 127,  292 => 118,  289 => 117,  285 => 115,  283 => 114,  280 => 113,  274 => 112,  266 => 110,  262 => 108,  257 => 107,  254 => 106,  250 => 105,  241 => 99,  238 => 98,  234 => 96,  232 => 95,  224 => 89,  216 => 86,  206 => 80,  204 => 79,  197 => 75,  193 => 74,  189 => 73,  185 => 72,  181 => 71,  177 => 70,  174 => 69,  168 => 68,  163 => 65,  161 => 64,  158 => 63,  156 => 62,  153 => 61,  151 => 60,  148 => 59,  146 => 58,  143 => 57,  140 => 56,  137 => 55,  133 => 54,  126 => 52,  119 => 48,  118 => 47,  115 => 46,  111 => 45,  83 => 20,  77 => 17,  71 => 14,  62 => 7,  56 => 6,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
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
/*                         {% elseif role == "ROLE_GESTIONNAIRE" %}*/
/*                             <span class="label*/
/*                             label-primary">GESTIONNAIRE</span>*/
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
/*                 listUsername.push({ label : "{{ user.username }}", value:*/
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
