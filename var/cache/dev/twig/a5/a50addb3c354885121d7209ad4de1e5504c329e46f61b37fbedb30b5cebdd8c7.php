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
        $__internal_1b8c61a56ba59e0e51363401257b88203f790c88334d00a2b668740c0376eacd = $this->env->getExtension("native_profiler");
        $__internal_1b8c61a56ba59e0e51363401257b88203f790c88334d00a2b668740c0376eacd->enter($__internal_1b8c61a56ba59e0e51363401257b88203f790c88334d00a2b668740c0376eacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b8c61a56ba59e0e51363401257b88203f790c88334d00a2b668740c0376eacd->leave($__internal_1b8c61a56ba59e0e51363401257b88203f790c88334d00a2b668740c0376eacd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c5063e9ea6bdf4468250564491071c83020743e205961d0a8c577db00ffa237 = $this->env->getExtension("native_profiler");
        $__internal_7c5063e9ea6bdf4468250564491071c83020743e205961d0a8c577db00ffa237->enter($__internal_7c5063e9ea6bdf4468250564491071c83020743e205961d0a8c577db00ffa237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a class=\"btn btn-default\" href=\"/formation/\">Back to  formation list</a>
    <h2 class=\"page-header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "title", array()), "html", null, true);
        echo "</h2>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Category: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "cost", array()), "html", null, true);
        echo " euros</li>
        <li class=\"list-group-item\">Desc : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "description", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">Date : ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "begin", array()), "y-m-d"), "html", null, true);
        // line 10
        echo "</li>
        <li class=\"list-group-item\">Durée: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "duration", array()), "html", null, true);
        echo "
            jours</li>
    </ul>



";
        
        $__internal_7c5063e9ea6bdf4468250564491071c83020743e205961d0a8c577db00ffa237->leave($__internal_7c5063e9ea6bdf4468250564491071c83020743e205961d0a8c577db00ffa237_prof);

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
        return array (  61 => 11,  58 => 10,  56 => 9,  52 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <a class="btn btn-default" href="/formation/">Back to  formation list</a>*/
/*     <h2 class="page-header">{{ formation.title }}</h2>*/
/*     <ul class="list-group">*/
/*         <li class="list-group-item">Category: {{ formation.cost }} euros</li>*/
/*         <li class="list-group-item">Desc : {{ formation.description }}</li>*/
/*         <li class="list-group-item">Date : {{ formation.begin|date('y-m-d')*/
/*             }}</li>*/
/*         <li class="list-group-item">Durée: {{ formation.duration }}*/
/*             jours</li>*/
/*     </ul>*/
/* */
/* */
/* */
/* {% endblock %}*/
