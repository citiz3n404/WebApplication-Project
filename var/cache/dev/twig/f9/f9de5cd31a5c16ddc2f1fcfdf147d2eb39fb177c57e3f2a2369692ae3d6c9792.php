<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_db3cf69c128dd7f42e4e7ae032b059fa3fe540b1580bfae786989c854fbc3671 extends Twig_Template
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
        $__internal_9aa6a447a90c97c9adc1195e4a9dfb888b0ef4be6e8c34d97cc619fa36d29c72 = $this->env->getExtension("native_profiler");
        $__internal_9aa6a447a90c97c9adc1195e4a9dfb888b0ef4be6e8c34d97cc619fa36d29c72->enter($__internal_9aa6a447a90c97c9adc1195e4a9dfb888b0ef4be6e8c34d97cc619fa36d29c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aa6a447a90c97c9adc1195e4a9dfb888b0ef4be6e8c34d97cc619fa36d29c72->leave($__internal_9aa6a447a90c97c9adc1195e4a9dfb888b0ef4be6e8c34d97cc619fa36d29c72_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39c48c561112abc6cceaf0570eff06cd8e45f104f7548ed6e53b79bad695d581 = $this->env->getExtension("native_profiler");
        $__internal_39c48c561112abc6cceaf0570eff06cd8e45f104f7548ed6e53b79bad695d581->enter($__internal_39c48c561112abc6cceaf0570eff06cd8e45f104f7548ed6e53b79bad695d581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_39c48c561112abc6cceaf0570eff06cd8e45f104f7548ed6e53b79bad695d581->leave($__internal_39c48c561112abc6cceaf0570eff06cd8e45f104f7548ed6e53b79bad695d581_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b9abdf89167c0e2a20299cba106033af44603aa5c18551256006882b905a8ee = $this->env->getExtension("native_profiler");
        $__internal_2b9abdf89167c0e2a20299cba106033af44603aa5c18551256006882b905a8ee->enter($__internal_2b9abdf89167c0e2a20299cba106033af44603aa5c18551256006882b905a8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b9abdf89167c0e2a20299cba106033af44603aa5c18551256006882b905a8ee->leave($__internal_2b9abdf89167c0e2a20299cba106033af44603aa5c18551256006882b905a8ee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_38332d22de07c3700efab9d4f54c21100aa1e7ba29b24dc787e03a9e085392c1 = $this->env->getExtension("native_profiler");
        $__internal_38332d22de07c3700efab9d4f54c21100aa1e7ba29b24dc787e03a9e085392c1->enter($__internal_38332d22de07c3700efab9d4f54c21100aa1e7ba29b24dc787e03a9e085392c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_38332d22de07c3700efab9d4f54c21100aa1e7ba29b24dc787e03a9e085392c1->leave($__internal_38332d22de07c3700efab9d4f54c21100aa1e7ba29b24dc787e03a9e085392c1_prof);

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
