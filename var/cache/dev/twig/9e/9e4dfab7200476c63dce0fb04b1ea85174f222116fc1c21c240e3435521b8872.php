<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_9646e481ab75a4d909ba1f5681bb8e4dfced399a7304bd30456c44a37550c4db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_8025079e6ffe98087a36674f268674cc80ef8eb48a505697eafb0a4fcf7196af = $this->env->getExtension("native_profiler");
        $__internal_8025079e6ffe98087a36674f268674cc80ef8eb48a505697eafb0a4fcf7196af->enter($__internal_8025079e6ffe98087a36674f268674cc80ef8eb48a505697eafb0a4fcf7196af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8025079e6ffe98087a36674f268674cc80ef8eb48a505697eafb0a4fcf7196af->leave($__internal_8025079e6ffe98087a36674f268674cc80ef8eb48a505697eafb0a4fcf7196af_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_efb22eab76f1a77f5ca7732bcced6d48c55047717f0b86744022624e626c5b7a = $this->env->getExtension("native_profiler");
        $__internal_efb22eab76f1a77f5ca7732bcced6d48c55047717f0b86744022624e626c5b7a->enter($__internal_efb22eab76f1a77f5ca7732bcced6d48c55047717f0b86744022624e626c5b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_efb22eab76f1a77f5ca7732bcced6d48c55047717f0b86744022624e626c5b7a->leave($__internal_efb22eab76f1a77f5ca7732bcced6d48c55047717f0b86744022624e626c5b7a_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f12381a77f6b49aeaad86b16ee3aa01ec3560adf13426dd644fde6d52355b29e = $this->env->getExtension("native_profiler");
        $__internal_f12381a77f6b49aeaad86b16ee3aa01ec3560adf13426dd644fde6d52355b29e->enter($__internal_f12381a77f6b49aeaad86b16ee3aa01ec3560adf13426dd644fde6d52355b29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 6)->display($context);
        
        $__internal_f12381a77f6b49aeaad86b16ee3aa01ec3560adf13426dd644fde6d52355b29e->leave($__internal_f12381a77f6b49aeaad86b16ee3aa01ec3560adf13426dd644fde6d52355b29e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* {% endblock body %}*/
