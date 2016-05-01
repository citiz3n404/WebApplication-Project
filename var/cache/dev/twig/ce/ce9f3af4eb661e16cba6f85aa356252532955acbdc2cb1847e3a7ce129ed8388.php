<?php

/* FormationBundle:Default:index.html.twig */
class __TwigTemplate_9ae079fa554195fe93da750546df637664ad266b2b3e0ee4b78e23c659d5ce9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FormationBundle:Default:index.html.twig", 1);
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
        $__internal_f85f1be4f2e6dadf9915cfba50d9448ccb9525c325a494f5d145244af7a1d8d3 = $this->env->getExtension("native_profiler");
        $__internal_f85f1be4f2e6dadf9915cfba50d9448ccb9525c325a494f5d145244af7a1d8d3->enter($__internal_f85f1be4f2e6dadf9915cfba50d9448ccb9525c325a494f5d145244af7a1d8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f85f1be4f2e6dadf9915cfba50d9448ccb9525c325a494f5d145244af7a1d8d3->leave($__internal_f85f1be4f2e6dadf9915cfba50d9448ccb9525c325a494f5d145244af7a1d8d3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2eb268c5183c9e72b5630bff5292be759e0986c81b32ca4debe930d812b6d9f6 = $this->env->getExtension("native_profiler");
        $__internal_2eb268c5183c9e72b5630bff5292be759e0986c81b32ca4debe930d812b6d9f6->enter($__internal_2eb268c5183c9e72b5630bff5292be759e0986c81b32ca4debe930d812b6d9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    FormationBundle
";
        
        $__internal_2eb268c5183c9e72b5630bff5292be759e0986c81b32ca4debe930d812b6d9f6->leave($__internal_2eb268c5183c9e72b5630bff5292be759e0986c81b32ca4debe930d812b6d9f6_prof);

    }

    public function getTemplateName()
    {
        return "FormationBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     FormationBundle*/
/* {% endblock %}*/
