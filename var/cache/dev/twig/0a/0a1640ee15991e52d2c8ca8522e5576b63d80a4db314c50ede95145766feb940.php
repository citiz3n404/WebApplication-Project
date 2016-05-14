<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_1240c35279bdec42635e1c929379e8640906b935c9fb72565356e941c36d6ae6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cf1e7f1494b57083a4225cb13aab6808f48cffc3c99b6b7d562b2a716cc0ec1 = $this->env->getExtension("native_profiler");
        $__internal_2cf1e7f1494b57083a4225cb13aab6808f48cffc3c99b6b7d562b2a716cc0ec1->enter($__internal_2cf1e7f1494b57083a4225cb13aab6808f48cffc3c99b6b7d562b2a716cc0ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf1e7f1494b57083a4225cb13aab6808f48cffc3c99b6b7d562b2a716cc0ec1->leave($__internal_2cf1e7f1494b57083a4225cb13aab6808f48cffc3c99b6b7d562b2a716cc0ec1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_978ffcf4d2053e7ccde6e86216293d3941ede30b1f977be628d191575db013c0 = $this->env->getExtension("native_profiler");
        $__internal_978ffcf4d2053e7ccde6e86216293d3941ede30b1f977be628d191575db013c0->enter($__internal_978ffcf4d2053e7ccde6e86216293d3941ede30b1f977be628d191575db013c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_978ffcf4d2053e7ccde6e86216293d3941ede30b1f977be628d191575db013c0->leave($__internal_978ffcf4d2053e7ccde6e86216293d3941ede30b1f977be628d191575db013c0_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0a0d1df79ac6507a6be6551fdec5989f803f3229425b55c5b3c78aece9698f5 = $this->env->getExtension("native_profiler");
        $__internal_c0a0d1df79ac6507a6be6551fdec5989f803f3229425b55c5b3c78aece9698f5->enter($__internal_c0a0d1df79ac6507a6be6551fdec5989f803f3229425b55c5b3c78aece9698f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 6)->display($context);
        
        $__internal_c0a0d1df79ac6507a6be6551fdec5989f803f3229425b55c5b3c78aece9698f5->leave($__internal_c0a0d1df79ac6507a6be6551fdec5989f803f3229425b55c5b3c78aece9698f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* {% endblock body %}*/
