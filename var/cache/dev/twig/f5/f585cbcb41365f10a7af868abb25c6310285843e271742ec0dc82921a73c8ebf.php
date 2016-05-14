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
        $__internal_682180636d87d21c8601e96eb6938d79586b7d9c9eec92f86657e64e936ae89b = $this->env->getExtension("native_profiler");
        $__internal_682180636d87d21c8601e96eb6938d79586b7d9c9eec92f86657e64e936ae89b->enter($__internal_682180636d87d21c8601e96eb6938d79586b7d9c9eec92f86657e64e936ae89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_682180636d87d21c8601e96eb6938d79586b7d9c9eec92f86657e64e936ae89b->leave($__internal_682180636d87d21c8601e96eb6938d79586b7d9c9eec92f86657e64e936ae89b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_efdf575c6ace5e47f22cd59825faae4aa4cc2eedc5d4b68ba1aa33a771002dda = $this->env->getExtension("native_profiler");
        $__internal_efdf575c6ace5e47f22cd59825faae4aa4cc2eedc5d4b68ba1aa33a771002dda->enter($__internal_efdf575c6ace5e47f22cd59825faae4aa4cc2eedc5d4b68ba1aa33a771002dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_efdf575c6ace5e47f22cd59825faae4aa4cc2eedc5d4b68ba1aa33a771002dda->leave($__internal_efdf575c6ace5e47f22cd59825faae4aa4cc2eedc5d4b68ba1aa33a771002dda_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb8e49324b29c8d0de11f629adc443490c6106a4c09e18c6f900e014dae4fd13 = $this->env->getExtension("native_profiler");
        $__internal_bb8e49324b29c8d0de11f629adc443490c6106a4c09e18c6f900e014dae4fd13->enter($__internal_bb8e49324b29c8d0de11f629adc443490c6106a4c09e18c6f900e014dae4fd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bb8e49324b29c8d0de11f629adc443490c6106a4c09e18c6f900e014dae4fd13->leave($__internal_bb8e49324b29c8d0de11f629adc443490c6106a4c09e18c6f900e014dae4fd13_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_439baa52fec8e81c10fd4b7617e832213644bfc43ac39eb9f89462b1a582d65d = $this->env->getExtension("native_profiler");
        $__internal_439baa52fec8e81c10fd4b7617e832213644bfc43ac39eb9f89462b1a582d65d->enter($__internal_439baa52fec8e81c10fd4b7617e832213644bfc43ac39eb9f89462b1a582d65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_439baa52fec8e81c10fd4b7617e832213644bfc43ac39eb9f89462b1a582d65d->leave($__internal_439baa52fec8e81c10fd4b7617e832213644bfc43ac39eb9f89462b1a582d65d_prof);

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
