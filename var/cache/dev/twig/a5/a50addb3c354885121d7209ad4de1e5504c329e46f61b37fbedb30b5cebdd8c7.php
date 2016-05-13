<?php

/* FormationBundle:Default:details.html.twig */
class __TwigTemplate_185f3ac785256eb6fcbefca99b2de2c02a0ffef80003d3cf68510e0949cef398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FormationBundle:Default:details.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e5744965814682f1a4408999aab58fb9117e0870ce731f51a17ac53c95114e6 = $this->env->getExtension("native_profiler");
        $__internal_7e5744965814682f1a4408999aab58fb9117e0870ce731f51a17ac53c95114e6->enter($__internal_7e5744965814682f1a4408999aab58fb9117e0870ce731f51a17ac53c95114e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e5744965814682f1a4408999aab58fb9117e0870ce731f51a17ac53c95114e6->leave($__internal_7e5744965814682f1a4408999aab58fb9117e0870ce731f51a17ac53c95114e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3621091e09dc0b16dd0b27b2caab0a879dc350556b7ba45e79193900ff28ba7 = $this->env->getExtension("native_profiler");
        $__internal_e3621091e09dc0b16dd0b27b2caab0a879dc350556b7ba45e79193900ff28ba7->enter($__internal_e3621091e09dc0b16dd0b27b2caab0a879dc350556b7ba45e79193900ff28ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a class=\"btn btn-default\" href=\"/formation/\">Back to  formation list</a>
    <a class=\"btn btn-primary\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationinscription", array("id" => $this->getAttribute(        // line 6
(isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id", array()))), "html", null, true);
        echo "\">Inscription</a>
    <h2 class=\"page-header\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "title", array()), "html", null, true);
        echo "</h2>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"panel panel-default\">
                <!-- Default panel contents -->
                <div class=\"panel-heading\">Illustration formation</div>
                    <img class=\"card-img-top\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/" . $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "img", array()))), "html", null, true);
        // line 16
        echo "\" alt=\"Card image cap\">

            </div>
        </div>
        <div class=\"col-md-8\">
            <div class=\"panel panel-default\">
                <!-- Default panel contents -->
                <div class=\"panel-heading\">Informations sur la formation</div>
                <table class=\"table table-striped\">
                    <tbody>
                    <tr>
                        <th scope=\"row\">Description</th>
                        <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "description", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Date</th>
                        <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "begin", array()), "y-m-d"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Durée</th>
                        <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "duration", array()), "html", null, true);
        echo " jours</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Status</th>
                        <td>";
        // line 40
        if ($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "locked", array())) {
            // line 41
            echo "                                Verouillée
                            ";
        } else {
            // line 43
            echo "                                Ouverte
                            ";
        }
        // line 44
        echo "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Coût</th>
                        <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "cost", array()), "html", null, true);
        echo " euros</td>
                    </tr>
                    <tr>
                        <th><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationedit", array("id" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id", array()))), "html", null, true);
        echo "\">
                                <span class=\"label label-info\" >Edit</span></a>


                            <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationlock", array("id" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id", array()))), "html", null, true);
        // line 56
        echo "\"><span class=\"label label-warning\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i></span></a>

                            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremove", array("id" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "id", array()))), "html", null, true);
        // line 59
        echo "\" ><span class=\"label label-danger\" ><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></span></a>
                        </th>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <h2 class=\"page-header\">Paticipants</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"panel panel-success\">
                <!-- Default panel contents -->
                <div class=\"panel-heading\">Participants inscrits</div>
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscriptions"]) ? $context["inscriptions"] : $this->getContext($context, "inscriptions")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            // line 86
            echo "                        ";
            if (($this->getAttribute($context["inscription"], "validated", array()) == true)) {
                // line 87
                echo "                            <tr>
                                <th scope=\"row\">";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
                                <td><a href=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "id", array()))), "html", null, true);
                // line 90
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "username", array()), "html", null, true);
                echo "</a></td>
                                <td>
                                    ";
                // line 92
                if (($this->getAttribute($context["inscription"], "validated", array()) != true)) {
                    // line 93
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationvalidateinscription", array("id" => $this->getAttribute(                    // line 94
$context["inscription"], "id", array()))), "html", null, true);
                    echo "\"class=\"btn btn-success\">Valider</a>
                                    ";
                }
                // line 96
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremoveinscription", array("id" => $this->getAttribute($context["inscription"], "id", array()))), "html", null, true);
                echo "\"class=\"btn btn-danger\">Remove</a>
                                </td>
                            </tr>
                        ";
            }
            // line 100
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"panel panel-danger\">
                <!-- Default panel contents -->
                <div class=\"panel-heading\">Participants en attente de validation</div>
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscriptions"]) ? $context["inscriptions"] : $this->getContext($context, "inscriptions")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            // line 120
            echo "                        ";
            if (($this->getAttribute($context["inscription"], "validated", array()) == false)) {
                // line 121
                echo "                            <tr>
                                <th scope=\"row\">";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
                                <td><a href=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "id", array()))), "html", null, true);
                // line 124
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "username", array()), "html", null, true);
                // line 126
                echo "</a></td>
                                <td>
                                    ";
                // line 128
                if (($this->getAttribute($context["inscription"], "validated", array()) != true)) {
                    // line 129
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationvalidateinscription", array("id" => $this->getAttribute(                    // line 130
$context["inscription"], "id", array()))), "html", null, true);
                    echo "\"class=\"btn btn-success\">Valider</a>
                                    ";
                }
                // line 132
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremoveinscription", array("id" => $this->getAttribute($context["inscription"], "id", array()))), "html", null, true);
                echo "\"class=\"btn btn-danger\">Remove</a>
                                </td>
                            </tr>
                        ";
            }
            // line 136
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                    </tbody>
                </table>
            </div>
        </div>

    </div>



";
        
        $__internal_e3621091e09dc0b16dd0b27b2caab0a879dc350556b7ba45e79193900ff28ba7->leave($__internal_e3621091e09dc0b16dd0b27b2caab0a879dc350556b7ba45e79193900ff28ba7_prof);

    }

    public function getTemplateName()
    {
        return "FormationBundle:Default:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 137,  299 => 136,  291 => 132,  286 => 130,  284 => 129,  282 => 128,  278 => 126,  275 => 124,  273 => 123,  269 => 122,  266 => 121,  263 => 120,  246 => 119,  226 => 101,  212 => 100,  204 => 96,  199 => 94,  197 => 93,  195 => 92,  189 => 90,  187 => 89,  183 => 88,  180 => 87,  177 => 86,  160 => 85,  132 => 59,  130 => 58,  126 => 56,  124 => 55,  117 => 51,  111 => 48,  105 => 44,  101 => 43,  97 => 41,  95 => 40,  88 => 36,  81 => 32,  74 => 28,  60 => 16,  58 => 14,  48 => 7,  44 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <a class="btn btn-default" href="/formation/">Back to  formation list</a>*/
/*     <a class="btn btn-primary" href="{{ path('formationinscription', {'id':*/
/*         formation.id}) }}">Inscription</a>*/
/*     <h2 class="page-header">{{ formation.title }}</h2>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-4">*/
/*             <div class="panel panel-default">*/
/*                 <!-- Default panel contents -->*/
/*                 <div class="panel-heading">Illustration formation</div>*/
/*                     <img class="card-img-top" src="{{ asset('img/' ~ formation*/
/*                     .img )*/
/*                     }}" alt="Card image cap">*/
/* */
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-8">*/
/*             <div class="panel panel-default">*/
/*                 <!-- Default panel contents -->*/
/*                 <div class="panel-heading">Informations sur la formation</div>*/
/*                 <table class="table table-striped">*/
/*                     <tbody>*/
/*                     <tr>*/
/*                         <th scope="row">Description</th>*/
/*                         <td>{{ formation.description}}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th scope="row">Date</th>*/
/*                         <td>{{ formation.begin|date('y-m-d') }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th scope="row">Durée</th>*/
/*                         <td>{{ formation.duration }} jours</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th scope="row">Status</th>*/
/*                         <td>{% if formation.locked %}*/
/*                                 Verouillée*/
/*                             {% else %}*/
/*                                 Ouverte*/
/*                             {% endif %}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th scope="row">Coût</th>*/
/*                         <td>{{ formation.cost }} euros</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th><a href="{{ path('formationedit', {'id': formation.id}) }}">*/
/*                                 <span class="label label-info" >Edit</span></a>*/
/* */
/* */
/*                             <a href="{{ path('formationlock', {'id': formation.id})*/
/*                             }}"><span class="label label-warning"><i class="fa fa-lock" aria-hidden="true"></i></span></a>*/
/* */
/*                             <a href="{{ path('formationremove', {'id': formation.id})*/
/*                             }}" ><span class="label label-danger" ><i class="fa fa-trash" aria-hidden="true"></i></span></a>*/
/*                         </th>*/
/*                         <td></td>*/
/*                     </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <h2 class="page-header">Paticipants</h2>*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-success">*/
/*                 <!-- Default panel contents -->*/
/*                 <div class="panel-heading">Participants inscrits</div>*/
/*                 <table class="table table-striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>#</th>*/
/*                         <th>User</th>*/
/*                         <th>Action</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for inscription in inscriptions %}*/
/*                         {%  if inscription.validated == true %}*/
/*                             <tr>*/
/*                                 <th scope="row">{{ loop.index }}</th>*/
/*                                 <td><a href="{{ path('profiluser', {'id': inscription*/
/*                                         .user.id })  }}"> {{ inscription.user.username }}</a></td>*/
/*                                 <td>*/
/*                                     {%  if inscription.validated != true %}*/
/*                                         <a href="{{ path('formationvalidateinscription', {'id':*/
/*                                             inscription.id }) }}"class="btn btn-success">Valider</a>*/
/*                                     {% endif %}*/
/*                                     <a href="{{ path('formationremoveinscription', {'id': inscription.id }) }}"class="btn btn-danger">Remove</a>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-md-6">*/
/*             <div class="panel panel-danger">*/
/*                 <!-- Default panel contents -->*/
/*                 <div class="panel-heading">Participants en attente de validation</div>*/
/*                 <table class="table table-striped">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>#</th>*/
/*                         <th>User</th>*/
/*                         <th>Action</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for inscription in inscriptions %}*/
/*                         {% if inscription.validated == false %}*/
/*                             <tr>*/
/*                                 <th scope="row">{{ loop.index }}</th>*/
/*                                 <td><a href="{{ path('profiluser', {'id': inscription*/
/*                                         .user.id })   }}"> {{ inscription*/
/*                                         .user.username*/
/*                                         }}</a></td>*/
/*                                 <td>*/
/*                                     {%  if inscription.validated != true %}*/
/*                                         <a href="{{ path('formationvalidateinscription', {'id':*/
/*                                             inscription.id }) }}"class="btn btn-success">Valider</a>*/
/*                                     {% endif %}*/
/*                                     <a href="{{ path('formationremoveinscription', {'id': inscription.id }) }}"class="btn btn-danger">Remove</a>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
