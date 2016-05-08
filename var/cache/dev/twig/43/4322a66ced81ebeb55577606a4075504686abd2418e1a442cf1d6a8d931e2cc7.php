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
        $__internal_adfddcb02c3ee06fb6b74dffc2075765c79b386f6a0154d60b09a3c194dd630b = $this->env->getExtension("native_profiler");
        $__internal_adfddcb02c3ee06fb6b74dffc2075765c79b386f6a0154d60b09a3c194dd630b->enter($__internal_adfddcb02c3ee06fb6b74dffc2075765c79b386f6a0154d60b09a3c194dd630b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StatsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adfddcb02c3ee06fb6b74dffc2075765c79b386f6a0154d60b09a3c194dd630b->leave($__internal_adfddcb02c3ee06fb6b74dffc2075765c79b386f6a0154d60b09a3c194dd630b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d1c919d76c5e28079e8fd5edd999a3265e4b7eeb3d9c1ae6c82ea1ee4cc5e6d = $this->env->getExtension("native_profiler");
        $__internal_1d1c919d76c5e28079e8fd5edd999a3265e4b7eeb3d9c1ae6c82ea1ee4cc5e6d->enter($__internal_1d1c919d76c5e28079e8fd5edd999a3265e4b7eeb3d9c1ae6c82ea1ee4cc5e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    StatsBundle
";
        
        $__internal_1d1c919d76c5e28079e8fd5edd999a3265e4b7eeb3d9c1ae6c82ea1ee4cc5e6d->leave($__internal_1d1c919d76c5e28079e8fd5edd999a3265e4b7eeb3d9c1ae6c82ea1ee4cc5e6d_prof);

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
