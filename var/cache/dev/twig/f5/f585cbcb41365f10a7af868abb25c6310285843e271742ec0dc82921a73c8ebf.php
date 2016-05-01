<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2253d4e7c86b8892caaf26a59955f86f458e12175583e6bf9622356e1f97895a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9671c86068024a3e4252df3d9f62205a48243ceadc2fbc8f3ec0172b866f91c6 = $this->env->getExtension("native_profiler");
        $__internal_9671c86068024a3e4252df3d9f62205a48243ceadc2fbc8f3ec0172b866f91c6->enter($__internal_9671c86068024a3e4252df3d9f62205a48243ceadc2fbc8f3ec0172b866f91c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9671c86068024a3e4252df3d9f62205a48243ceadc2fbc8f3ec0172b866f91c6->leave($__internal_9671c86068024a3e4252df3d9f62205a48243ceadc2fbc8f3ec0172b866f91c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54a09b332b7eaac6f3e8dd1a898d90b1d141c352e4ecbd7f87f3570ad1ec21e4 = $this->env->getExtension("native_profiler");
        $__internal_54a09b332b7eaac6f3e8dd1a898d90b1d141c352e4ecbd7f87f3570ad1ec21e4->enter($__internal_54a09b332b7eaac6f3e8dd1a898d90b1d141c352e4ecbd7f87f3570ad1ec21e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_54a09b332b7eaac6f3e8dd1a898d90b1d141c352e4ecbd7f87f3570ad1ec21e4->leave($__internal_54a09b332b7eaac6f3e8dd1a898d90b1d141c352e4ecbd7f87f3570ad1ec21e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0997d4e930f04eba16c13ad6d9e5db5f520ee6e752648b04b0c302e2105e55b = $this->env->getExtension("native_profiler");
        $__internal_e0997d4e930f04eba16c13ad6d9e5db5f520ee6e752648b04b0c302e2105e55b->enter($__internal_e0997d4e930f04eba16c13ad6d9e5db5f520ee6e752648b04b0c302e2105e55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e0997d4e930f04eba16c13ad6d9e5db5f520ee6e752648b04b0c302e2105e55b->leave($__internal_e0997d4e930f04eba16c13ad6d9e5db5f520ee6e752648b04b0c302e2105e55b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8505ec7dde293198462baa90b55cc13121e2ce63a88c1849a9f1d0516f73726d = $this->env->getExtension("native_profiler");
        $__internal_8505ec7dde293198462baa90b55cc13121e2ce63a88c1849a9f1d0516f73726d->enter($__internal_8505ec7dde293198462baa90b55cc13121e2ce63a88c1849a9f1d0516f73726d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8505ec7dde293198462baa90b55cc13121e2ce63a88c1849a9f1d0516f73726d->leave($__internal_8505ec7dde293198462baa90b55cc13121e2ce63a88c1849a9f1d0516f73726d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
