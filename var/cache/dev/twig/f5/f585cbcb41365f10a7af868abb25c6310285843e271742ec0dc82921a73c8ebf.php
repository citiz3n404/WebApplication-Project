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
        $__internal_cc570818de6590b111b640cf189297d6d17d5463b76e029013d62d6066315f59 = $this->env->getExtension("native_profiler");
        $__internal_cc570818de6590b111b640cf189297d6d17d5463b76e029013d62d6066315f59->enter($__internal_cc570818de6590b111b640cf189297d6d17d5463b76e029013d62d6066315f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc570818de6590b111b640cf189297d6d17d5463b76e029013d62d6066315f59->leave($__internal_cc570818de6590b111b640cf189297d6d17d5463b76e029013d62d6066315f59_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc4243c4181566314dd9f76cef45f2dbc67322cfec6a1cc3de9a608bb80de934 = $this->env->getExtension("native_profiler");
        $__internal_fc4243c4181566314dd9f76cef45f2dbc67322cfec6a1cc3de9a608bb80de934->enter($__internal_fc4243c4181566314dd9f76cef45f2dbc67322cfec6a1cc3de9a608bb80de934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fc4243c4181566314dd9f76cef45f2dbc67322cfec6a1cc3de9a608bb80de934->leave($__internal_fc4243c4181566314dd9f76cef45f2dbc67322cfec6a1cc3de9a608bb80de934_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b343da427965b64db0f83adf4e0fb7a842ae5e5f04eb9fa84750bb4ab5fa3ff9 = $this->env->getExtension("native_profiler");
        $__internal_b343da427965b64db0f83adf4e0fb7a842ae5e5f04eb9fa84750bb4ab5fa3ff9->enter($__internal_b343da427965b64db0f83adf4e0fb7a842ae5e5f04eb9fa84750bb4ab5fa3ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b343da427965b64db0f83adf4e0fb7a842ae5e5f04eb9fa84750bb4ab5fa3ff9->leave($__internal_b343da427965b64db0f83adf4e0fb7a842ae5e5f04eb9fa84750bb4ab5fa3ff9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b501b08b7bdf5e3189481354179dd5515c90494cf9a386bb824f0cfe2bb68ef1 = $this->env->getExtension("native_profiler");
        $__internal_b501b08b7bdf5e3189481354179dd5515c90494cf9a386bb824f0cfe2bb68ef1->enter($__internal_b501b08b7bdf5e3189481354179dd5515c90494cf9a386bb824f0cfe2bb68ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b501b08b7bdf5e3189481354179dd5515c90494cf9a386bb824f0cfe2bb68ef1->leave($__internal_b501b08b7bdf5e3189481354179dd5515c90494cf9a386bb824f0cfe2bb68ef1_prof);

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
