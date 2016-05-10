<?php

/* ForumBundle:Categorie:edit.html.twig */
class __TwigTemplate_d8641d1952760bd224325b07b3f4af9abb0be74337fb605ce152e0b99df307c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:Categorie:edit.html.twig", 1);
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
        $__internal_2bfc357af2bbfeb6da6acc8f92bbe264b45e3a14243079ab2eece967b94468a8 = $this->env->getExtension("native_profiler");
        $__internal_2bfc357af2bbfeb6da6acc8f92bbe264b45e3a14243079ab2eece967b94468a8->enter($__internal_2bfc357af2bbfeb6da6acc8f92bbe264b45e3a14243079ab2eece967b94468a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Categorie:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bfc357af2bbfeb6da6acc8f92bbe264b45e3a14243079ab2eece967b94468a8->leave($__internal_2bfc357af2bbfeb6da6acc8f92bbe264b45e3a14243079ab2eece967b94468a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bad2915ad6a0f6bf08e9c20708a55fe8c4c4eabf417beb81bc09eef7579ae77 = $this->env->getExtension("native_profiler");
        $__internal_9bad2915ad6a0f6bf08e9c20708a55fe8c4c4eabf417beb81bc09eef7579ae77->enter($__internal_9bad2915ad6a0f6bf08e9c20708a55fe8c4c4eabf417beb81bc09eef7579ae77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Edit Categorie</h2>
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9bad2915ad6a0f6bf08e9c20708a55fe8c4c4eabf417beb81bc09eef7579ae77->leave($__internal_9bad2915ad6a0f6bf08e9c20708a55fe8c4c4eabf417beb81bc09eef7579ae77_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Categorie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">Edit Categorie</h2>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
