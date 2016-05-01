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
        $__internal_da7e4806911a839ce286eb806f858fd2c3976602d8ed607074650a56a892ce0d = $this->env->getExtension("native_profiler");
        $__internal_da7e4806911a839ce286eb806f858fd2c3976602d8ed607074650a56a892ce0d->enter($__internal_da7e4806911a839ce286eb806f858fd2c3976602d8ed607074650a56a892ce0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da7e4806911a839ce286eb806f858fd2c3976602d8ed607074650a56a892ce0d->leave($__internal_da7e4806911a839ce286eb806f858fd2c3976602d8ed607074650a56a892ce0d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b815e66a722a7e2b97ae11ec962d2ce01d8065f5c947b76ed1d0329394919343 = $this->env->getExtension("native_profiler");
        $__internal_b815e66a722a7e2b97ae11ec962d2ce01d8065f5c947b76ed1d0329394919343->enter($__internal_b815e66a722a7e2b97ae11ec962d2ce01d8065f5c947b76ed1d0329394919343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    FormationBundle
";
        
        $__internal_b815e66a722a7e2b97ae11ec962d2ce01d8065f5c947b76ed1d0329394919343->leave($__internal_b815e66a722a7e2b97ae11ec962d2ce01d8065f5c947b76ed1d0329394919343_prof);

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
