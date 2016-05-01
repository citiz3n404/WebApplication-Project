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
        $__internal_653929d40048b2a267f2a62287207d29643de1ce4169f731d63c84b93fc81527 = $this->env->getExtension("native_profiler");
        $__internal_653929d40048b2a267f2a62287207d29643de1ce4169f731d63c84b93fc81527->enter($__internal_653929d40048b2a267f2a62287207d29643de1ce4169f731d63c84b93fc81527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_653929d40048b2a267f2a62287207d29643de1ce4169f731d63c84b93fc81527->leave($__internal_653929d40048b2a267f2a62287207d29643de1ce4169f731d63c84b93fc81527_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_98a1ffa5fc6009b49b9d102e5e5335dc4671bc2de296b39868c892c05fb6349e = $this->env->getExtension("native_profiler");
        $__internal_98a1ffa5fc6009b49b9d102e5e5335dc4671bc2de296b39868c892c05fb6349e->enter($__internal_98a1ffa5fc6009b49b9d102e5e5335dc4671bc2de296b39868c892c05fb6349e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_98a1ffa5fc6009b49b9d102e5e5335dc4671bc2de296b39868c892c05fb6349e->leave($__internal_98a1ffa5fc6009b49b9d102e5e5335dc4671bc2de296b39868c892c05fb6349e_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06cd607bcbf883492acd129ebd337c6bcf173952609f5ac21515251296380749 = $this->env->getExtension("native_profiler");
        $__internal_06cd607bcbf883492acd129ebd337c6bcf173952609f5ac21515251296380749->enter($__internal_06cd607bcbf883492acd129ebd337c6bcf173952609f5ac21515251296380749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 6)->display($context);
        
        $__internal_06cd607bcbf883492acd129ebd337c6bcf173952609f5ac21515251296380749->leave($__internal_06cd607bcbf883492acd129ebd337c6bcf173952609f5ac21515251296380749_prof);

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
