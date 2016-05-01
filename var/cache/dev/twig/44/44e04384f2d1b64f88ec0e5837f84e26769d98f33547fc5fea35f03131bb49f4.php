<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_db09b546b62b30eab9b09e85f485c2567d0ed1750de172f37e91a5f1e1033169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Default:index.html.twig", 1);
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
        $__internal_d059a46bf46e3aa85a304e71665d4944dae2e862920674ae38ddcbaf8797af10 = $this->env->getExtension("native_profiler");
        $__internal_d059a46bf46e3aa85a304e71665d4944dae2e862920674ae38ddcbaf8797af10->enter($__internal_d059a46bf46e3aa85a304e71665d4944dae2e862920674ae38ddcbaf8797af10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d059a46bf46e3aa85a304e71665d4944dae2e862920674ae38ddcbaf8797af10->leave($__internal_d059a46bf46e3aa85a304e71665d4944dae2e862920674ae38ddcbaf8797af10_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7581f42f6eef82c3cd5ebe2e59f25f500cddd5e62bb7e390c860aa76e3809927 = $this->env->getExtension("native_profiler");
        $__internal_7581f42f6eef82c3cd5ebe2e59f25f500cddd5e62bb7e390c860aa76e3809927->enter($__internal_7581f42f6eef82c3cd5ebe2e59f25f500cddd5e62bb7e390c860aa76e3809927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    UserBundle
";
        
        $__internal_7581f42f6eef82c3cd5ebe2e59f25f500cddd5e62bb7e390c860aa76e3809927->leave($__internal_7581f42f6eef82c3cd5ebe2e59f25f500cddd5e62bb7e390c860aa76e3809927_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
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
/*     UserBundle*/
/* {% endblock %}*/
