<?php

/* FormationBundle:Default:edit.html.twig */
class __TwigTemplate_e577e54ea65ec4d53cd86ca4f20c11e002630a3809dc195f9ca4bb34907ede85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FormationBundle:Default:edit.html.twig", 1);
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
        $__internal_c64cb6d1b05b4cea5e5e7949a78d4d6d0d946b2451d80a9a8573af1d80983055 = $this->env->getExtension("native_profiler");
        $__internal_c64cb6d1b05b4cea5e5e7949a78d4d6d0d946b2451d80a9a8573af1d80983055->enter($__internal_c64cb6d1b05b4cea5e5e7949a78d4d6d0d946b2451d80a9a8573af1d80983055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormationBundle:Default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c64cb6d1b05b4cea5e5e7949a78d4d6d0d946b2451d80a9a8573af1d80983055->leave($__internal_c64cb6d1b05b4cea5e5e7949a78d4d6d0d946b2451d80a9a8573af1d80983055_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_46086d9451a694c38f7aa429b35a92c86d38d3f4e86000c945371c1cbcf77aec = $this->env->getExtension("native_profiler");
        $__internal_46086d9451a694c38f7aa429b35a92c86d38d3f4e86000c945371c1cbcf77aec->enter($__internal_46086d9451a694c38f7aa429b35a92c86d38d3f4e86000c945371c1cbcf77aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">Edit</h2>
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
        
        $__internal_46086d9451a694c38f7aa429b35a92c86d38d3f4e86000c945371c1cbcf77aec->leave($__internal_46086d9451a694c38f7aa429b35a92c86d38d3f4e86000c945371c1cbcf77aec_prof);

    }

    public function getTemplateName()
    {
        return "FormationBundle:Default:edit.html.twig";
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
/*     <h2 class="page-header">Edit</h2>*/
/*     {{ form_start(form) }}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
