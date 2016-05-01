<?php

/* StatsBundle:Default:index.html.twig */
class __TwigTemplate_f507e6f02c60f355abc3dc262f1bc810072234452ee083113e416de473c5556f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "StatsBundle:Default:index.html.twig", 1);
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
        $__internal_8a7283fc5f1f557d4d77c3f05bac8dc5648f46a03b4ffa730d045aed87e9beab = $this->env->getExtension("native_profiler");
        $__internal_8a7283fc5f1f557d4d77c3f05bac8dc5648f46a03b4ffa730d045aed87e9beab->enter($__internal_8a7283fc5f1f557d4d77c3f05bac8dc5648f46a03b4ffa730d045aed87e9beab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StatsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a7283fc5f1f557d4d77c3f05bac8dc5648f46a03b4ffa730d045aed87e9beab->leave($__internal_8a7283fc5f1f557d4d77c3f05bac8dc5648f46a03b4ffa730d045aed87e9beab_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c8d198b888a71092ddbdd87b06047ad0fb29ca2982c1dd02ee204f81760961f = $this->env->getExtension("native_profiler");
        $__internal_1c8d198b888a71092ddbdd87b06047ad0fb29ca2982c1dd02ee204f81760961f->enter($__internal_1c8d198b888a71092ddbdd87b06047ad0fb29ca2982c1dd02ee204f81760961f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    StatsBundle
";
        
        $__internal_1c8d198b888a71092ddbdd87b06047ad0fb29ca2982c1dd02ee204f81760961f->leave($__internal_1c8d198b888a71092ddbdd87b06047ad0fb29ca2982c1dd02ee204f81760961f_prof);

    }

    public function getTemplateName()
    {
        return "StatsBundle:Default:index.html.twig";
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
/*     StatsBundle*/
/* {% endblock %}*/
