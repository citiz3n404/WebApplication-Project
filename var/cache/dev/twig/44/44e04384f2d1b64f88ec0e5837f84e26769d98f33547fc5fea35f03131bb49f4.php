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
        $__internal_60213e7552b24f1b60402aa2f9cd2e857a8af09d497f49cf789b9c215b069476 = $this->env->getExtension("native_profiler");
        $__internal_60213e7552b24f1b60402aa2f9cd2e857a8af09d497f49cf789b9c215b069476->enter($__internal_60213e7552b24f1b60402aa2f9cd2e857a8af09d497f49cf789b9c215b069476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60213e7552b24f1b60402aa2f9cd2e857a8af09d497f49cf789b9c215b069476->leave($__internal_60213e7552b24f1b60402aa2f9cd2e857a8af09d497f49cf789b9c215b069476_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7865b63ca51f52857a2a40251c622c767229375aa413596e9a05bfa19597d5f4 = $this->env->getExtension("native_profiler");
        $__internal_7865b63ca51f52857a2a40251c622c767229375aa413596e9a05bfa19597d5f4->enter($__internal_7865b63ca51f52857a2a40251c622c767229375aa413596e9a05bfa19597d5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    UserBundle
";
        
        $__internal_7865b63ca51f52857a2a40251c622c767229375aa413596e9a05bfa19597d5f4->leave($__internal_7865b63ca51f52857a2a40251c622c767229375aa413596e9a05bfa19597d5f4_prof);

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
