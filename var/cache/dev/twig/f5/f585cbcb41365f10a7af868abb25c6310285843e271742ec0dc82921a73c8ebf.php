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
        $__internal_775d6017a73f626e9f9e684bf70793c539b8d2986d9a01b0d08b34cd23e72df8 = $this->env->getExtension("native_profiler");
        $__internal_775d6017a73f626e9f9e684bf70793c539b8d2986d9a01b0d08b34cd23e72df8->enter($__internal_775d6017a73f626e9f9e684bf70793c539b8d2986d9a01b0d08b34cd23e72df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_775d6017a73f626e9f9e684bf70793c539b8d2986d9a01b0d08b34cd23e72df8->leave($__internal_775d6017a73f626e9f9e684bf70793c539b8d2986d9a01b0d08b34cd23e72df8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ed304693a813ef27569e1c6b37aed39c0de92a3eff860d2a773df3c9a1c7007 = $this->env->getExtension("native_profiler");
        $__internal_2ed304693a813ef27569e1c6b37aed39c0de92a3eff860d2a773df3c9a1c7007->enter($__internal_2ed304693a813ef27569e1c6b37aed39c0de92a3eff860d2a773df3c9a1c7007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2ed304693a813ef27569e1c6b37aed39c0de92a3eff860d2a773df3c9a1c7007->leave($__internal_2ed304693a813ef27569e1c6b37aed39c0de92a3eff860d2a773df3c9a1c7007_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3a7090960845528229a48dfbe1684331b2ca7580107a689745694e6b1f4eac5 = $this->env->getExtension("native_profiler");
        $__internal_f3a7090960845528229a48dfbe1684331b2ca7580107a689745694e6b1f4eac5->enter($__internal_f3a7090960845528229a48dfbe1684331b2ca7580107a689745694e6b1f4eac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f3a7090960845528229a48dfbe1684331b2ca7580107a689745694e6b1f4eac5->leave($__internal_f3a7090960845528229a48dfbe1684331b2ca7580107a689745694e6b1f4eac5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc1a6dab0792715b366e584497ea0037f0da756682ce036f7ed5cc396bca320f = $this->env->getExtension("native_profiler");
        $__internal_dc1a6dab0792715b366e584497ea0037f0da756682ce036f7ed5cc396bca320f->enter($__internal_dc1a6dab0792715b366e584497ea0037f0da756682ce036f7ed5cc396bca320f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dc1a6dab0792715b366e584497ea0037f0da756682ce036f7ed5cc396bca320f->leave($__internal_dc1a6dab0792715b366e584497ea0037f0da756682ce036f7ed5cc396bca320f_prof);

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
