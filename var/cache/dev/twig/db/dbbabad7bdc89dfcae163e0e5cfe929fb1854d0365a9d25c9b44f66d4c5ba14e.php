<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_5b0a20a776590d8149cc7ebf24f2ba93bcd25b2e43fd16e0bb063b69ff462235 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AdminBundle:Default:index.html.twig", 1);
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
        $__internal_aa40bac7f9247b6519a3b76fe9dbe15f24212119a371dc2de7c1d8b9bcb82dd0 = $this->env->getExtension("native_profiler");
        $__internal_aa40bac7f9247b6519a3b76fe9dbe15f24212119a371dc2de7c1d8b9bcb82dd0->enter($__internal_aa40bac7f9247b6519a3b76fe9dbe15f24212119a371dc2de7c1d8b9bcb82dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa40bac7f9247b6519a3b76fe9dbe15f24212119a371dc2de7c1d8b9bcb82dd0->leave($__internal_aa40bac7f9247b6519a3b76fe9dbe15f24212119a371dc2de7c1d8b9bcb82dd0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbd50d2cb1639f6a158db7c567383df543f37d860e94d73f6baec05310dc88e0 = $this->env->getExtension("native_profiler");
        $__internal_bbd50d2cb1639f6a158db7c567383df543f37d860e94d73f6baec05310dc88e0->enter($__internal_bbd50d2cb1639f6a158db7c567383df543f37d860e94d73f6baec05310dc88e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    AdminBundle
";
        
        $__internal_bbd50d2cb1639f6a158db7c567383df543f37d860e94d73f6baec05310dc88e0->leave($__internal_bbd50d2cb1639f6a158db7c567383df543f37d860e94d73f6baec05310dc88e0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
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
/*     AdminBundle*/
/* {% endblock %}*/
/* */
