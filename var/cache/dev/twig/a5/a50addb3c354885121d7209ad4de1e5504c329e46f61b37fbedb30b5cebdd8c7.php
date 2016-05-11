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
        $__internal_abe45c792ddb5f047f9817d0dde05a20f2d5851994f0173575d796fdc4e429f4 = $this->env->getExtension("native_profiler");
        $__internal_abe45c792ddb5f047f9817d0dde05a20f2d5851994f0173575d796fdc4e429f4->enter($__internal_abe45c792ddb5f047f9817d0dde05a20f2d5851994f0173575d796fdc4e429f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abe45c792ddb5f047f9817d0dde05a20f2d5851994f0173575d796fdc4e429f4->leave($__internal_abe45c792ddb5f047f9817d0dde05a20f2d5851994f0173575d796fdc4e429f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_19ae4561199cb3a1a92ac29023e5aac246dc9de72131034c24befa61aad173c1 = $this->env->getExtension("native_profiler");
        $__internal_19ae4561199cb3a1a92ac29023e5aac246dc9de72131034c24befa61aad173c1->enter($__internal_19ae4561199cb3a1a92ac29023e5aac246dc9de72131034c24befa61aad173c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscriptions"]) ? $context["inscriptions"] : $this->getContext($context, "inscriptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            // line 35
            echo "            <tr>
                <th scope=\"row\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["inscription"], "id", array()), "html", null, true);
            echo "</th>
                <td><a href=\"\"> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscription"], "user", array()), "username", array()), "html", null, true);
            echo "</a></td>
                <td>
                    ";
            // line 39
            if (($this->getAttribute($context["inscription"], "validated", array()) != true)) {
                // line 40
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationvalidateinscription", array("id" => $this->getAttribute(                // line 41
$context["inscription"], "id", array()))), "html", null, true);
                echo "\"class=\"btn btn-success\">Valider</a>
                    ";
            }
            // line 43
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("formationremoveinscription", array("id" => $this->getAttribute($context["inscription"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-danger\">Remove</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
";
        
        $__internal_19ae4561199cb3a1a92ac29023e5aac246dc9de72131034c24befa61aad173c1->leave($__internal_19ae4561199cb3a1a92ac29023e5aac246dc9de72131034c24befa61aad173c1_prof);

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
        return array (  133 => 47,  122 => 43,  117 => 41,  115 => 40,  113 => 39,  108 => 37,  104 => 36,  101 => 35,  97 => 34,  81 => 20,  77 => 18,  73 => 16,  71 => 15,  66 => 13,  62 => 12,  59 => 11,  57 => 10,  53 => 9,  48 => 7,  44 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/*     <table class="table table-striped">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>#</th>*/
/*             <th>User</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for inscription in inscriptions %}*/
/*             <tr>*/
/*                 <th scope="row">{{ inscription.id }}</th>*/
/*                 <td><a href=""> {{ inscription.user.username }}</a></td>*/
/*                 <td>*/
/*                     {%  if inscription.validated != true %}*/
/*                     <a href="{{ path('formationvalidateinscription', {'id':*/
/*                         inscription.id }) }}"class="btn btn-success">Valider</a>*/
/*                     {% endif %}*/
/*                     <a href="{{ path('formationremoveinscription', {'id': inscription.id }) }}"class="btn btn-danger">Remove</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
