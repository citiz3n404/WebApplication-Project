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
        $__internal_5ba5a52f6b898bfa7f35458c912c4241ca72c95899b4fe1beb3fb65913ade98a = $this->env->getExtension("native_profiler");
        $__internal_5ba5a52f6b898bfa7f35458c912c4241ca72c95899b4fe1beb3fb65913ade98a->enter($__internal_5ba5a52f6b898bfa7f35458c912c4241ca72c95899b4fe1beb3fb65913ade98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ba5a52f6b898bfa7f35458c912c4241ca72c95899b4fe1beb3fb65913ade98a->leave($__internal_5ba5a52f6b898bfa7f35458c912c4241ca72c95899b4fe1beb3fb65913ade98a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d440063ff6571b211edfff790263a12d8056f2bb2e42a3c6d9109fdc2c9c03d2 = $this->env->getExtension("native_profiler");
        $__internal_d440063ff6571b211edfff790263a12d8056f2bb2e42a3c6d9109fdc2c9c03d2->enter($__internal_d440063ff6571b211edfff790263a12d8056f2bb2e42a3c6d9109fdc2c9c03d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Prix: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "cost", array()), "html", null, true);
        echo " euros</li>
        <li class=\"list-group-item\">Description : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "description", array()), "html", null, true);
        // line 11
        echo "</li>
        <li class=\"list-group-item\">Date : ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "begin", array()), "y-m-d"), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Durée: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "duration", array()), "html", null, true);
        echo " jours</li>
        <li class=\"list-group-item\">Status:
            ";
        // line 15
        if ($this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "locked", array())) {
            // line 16
            echo "            Verouillée
            ";
        } else {
            // line 18
            echo "            Ouverte
            ";
        }
        // line 20
        echo "        </li>
    </ul>


    <h2 class=\"page-header\">Paticipants</h2>
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
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscriptions"]) ? $context["inscriptions"] : $this->getContext($context, "inscriptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            // line 38
            echo "                ";
            if (($this->getAttribute($context["inscription"], "validated", array()) == true)) {
                // line 39
                echo "                <tr>
                    <th scope=\"row\">";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["inscription"], "id", array()), "html", null, true);
                echo "</th>
                    <td><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "id", array()))), "html", null, true);
                // line 42
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "username", array()), "html", null, true);
                echo "</a></td>
                    <td>
                        ";
                // line 44
                if (($this->getAttribute($context["inscription"], "validated", array()) != true)) {
                    // line 45
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationvalidateinscription", array("id" => $this->getAttribute(                    // line 46
$context["inscription"], "id", array()))), "html", null, true);
                    echo "\"class=\"btn btn-success\">Valider</a>
                        ";
                }
                // line 48
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremoveinscription", array("id" => $this->getAttribute($context["inscription"], "id", array()))), "html", null, true);
                echo "\"class=\"btn btn-danger\">Remove</a>
                    </td>
                </tr>
                ";
            }
            // line 52
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </tbody>
        </table>
    </div>

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
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscriptions"]) ? $context["inscriptions"] : $this->getContext($context, "inscriptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            // line 70
            echo "                ";
            if (($this->getAttribute($context["inscription"], "validated", array()) == false)) {
                // line 71
                echo "                <tr>
                    <th scope=\"row\">";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["inscription"], "id", array()), "html", null, true);
                echo "</th>
                    <td><a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profiluser", array("id" => $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "id", array()))), "html", null, true);
                // line 74
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "username", array()), "html", null, true);
                // line 76
                echo "</a></td>
                    <td>
                        ";
                // line 78
                if (($this->getAttribute($context["inscription"], "validated", array()) != true)) {
                    // line 79
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationvalidateinscription", array("id" => $this->getAttribute(                    // line 80
$context["inscription"], "id", array()))), "html", null, true);
                    echo "\"class=\"btn btn-success\">Valider</a>
                        ";
                }
                // line 82
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremoveinscription", array("id" => $this->getAttribute($context["inscription"], "id", array()))), "html", null, true);
                echo "\"class=\"btn btn-danger\">Remove</a>
                    </td>
                </tr>
                ";
            }
            // line 86
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_d440063ff6571b211edfff790263a12d8056f2bb2e42a3c6d9109fdc2c9c03d2->leave($__internal_d440063ff6571b211edfff790263a12d8056f2bb2e42a3c6d9109fdc2c9c03d2_prof);

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
        return array (  209 => 87,  203 => 86,  195 => 82,  190 => 80,  188 => 79,  186 => 78,  182 => 76,  179 => 74,  177 => 73,  173 => 72,  170 => 71,  167 => 70,  163 => 69,  145 => 53,  139 => 52,  131 => 48,  126 => 46,  124 => 45,  122 => 44,  116 => 42,  114 => 41,  110 => 40,  107 => 39,  104 => 38,  100 => 37,  81 => 20,  77 => 18,  73 => 16,  71 => 15,  66 => 13,  62 => 12,  59 => 11,  57 => 10,  53 => 9,  48 => 7,  44 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <a class="btn btn-default" href="/formation/">Back to  formation list</a>*/
/*     <a class="btn btn-primary" href="{{ path('formationinscription', {'id':*/
/*         formation.id}) }}">Inscription</a>*/
/*     <h2 class="page-header">{{ formation.title }}</h2>*/
/*     <ul class="list-group">*/
/*         <li class="list-group-item">Prix: {{ formation.cost }} euros</li>*/
/*         <li class="list-group-item">Description : {{ formation.description*/
/*             }}</li>*/
/*         <li class="list-group-item">Date : {{ formation.begin|date('y-m-d')}}</li>*/
/*         <li class="list-group-item">Durée: {{ formation.duration }} jours</li>*/
/*         <li class="list-group-item">Status:*/
/*             {% if formation.locked %}*/
/*             Verouillée*/
/*             {% else %}*/
/*             Ouverte*/
/*             {% endif %}*/
/*         </li>*/
/*     </ul>*/
/* */
/* */
/*     <h2 class="page-header">Paticipants</h2>*/
/*     <div class="panel panel-success">*/
/*         <!-- Default panel contents -->*/
/*         <div class="panel-heading">Participants inscrits</div>*/
/*         <table class="table table-striped">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>#</th>*/
/*                 <th>User</th>*/
/*                 <th>Action</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for inscription in inscriptions %}*/
/*                 {%  if inscription.validated == true %}*/
/*                 <tr>*/
/*                     <th scope="row">{{ inscription.id }}</th>*/
/*                     <td><a href="{{ path('profiluser', {'id': inscription*/
/*                             .user.id })  }}"> {{ inscription.user.username }}</a></td>*/
/*                     <td>*/
/*                         {%  if inscription.validated != true %}*/
/*                         <a href="{{ path('formationvalidateinscription', {'id':*/
/*                             inscription.id }) }}"class="btn btn-success">Valider</a>*/
/*                         {% endif %}*/
/*                         <a href="{{ path('formationremoveinscription', {'id': inscription.id }) }}"class="btn btn-danger">Remove</a>*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/*     <div class="panel panel-danger">*/
/*         <!-- Default panel contents -->*/
/*         <div class="panel-heading">Participants en attente de validation</div>*/
/*         <table class="table table-striped">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>#</th>*/
/*                 <th>User</th>*/
/*                 <th>Action</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for inscription in inscriptions %}*/
/*                 {% if inscription.validated == false %}*/
/*                 <tr>*/
/*                     <th scope="row">{{ inscription.id }}</th>*/
/*                     <td><a href="{{ path('profiluser', {'id': inscription*/
/*                             .user.id })   }}"> {{ inscription*/
/*                             .user.username*/
/*                             }}</a></td>*/
/*                     <td>*/
/*                         {%  if inscription.validated != true %}*/
/*                             <a href="{{ path('formationvalidateinscription', {'id':*/
/*                                 inscription.id }) }}"class="btn btn-success">Valider</a>*/
/*                         {% endif %}*/
/*                         <a href="{{ path('formationremoveinscription', {'id': inscription.id }) }}"class="btn btn-danger">Remove</a>*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
