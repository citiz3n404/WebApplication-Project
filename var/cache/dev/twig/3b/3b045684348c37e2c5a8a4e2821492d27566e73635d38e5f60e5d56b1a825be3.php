<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_58f98efb576c5a7bd4937a32e2038b22910b39373378897ab4394470fdcb56e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35f374afd6fae92d6ed135dba236a2a902c42e06bed2beaf5f1eed49bb0d44f1 = $this->env->getExtension("native_profiler");
        $__internal_35f374afd6fae92d6ed135dba236a2a902c42e06bed2beaf5f1eed49bb0d44f1->enter($__internal_35f374afd6fae92d6ed135dba236a2a902c42e06bed2beaf5f1eed49bb0d44f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35f374afd6fae92d6ed135dba236a2a902c42e06bed2beaf5f1eed49bb0d44f1->leave($__internal_35f374afd6fae92d6ed135dba236a2a902c42e06bed2beaf5f1eed49bb0d44f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01bbf0948cadeb4252a42675fb5ac524b2292b3c0ff9a0342f6768b2e67054fc = $this->env->getExtension("native_profiler");
        $__internal_01bbf0948cadeb4252a42675fb5ac524b2292b3c0ff9a0342f6768b2e67054fc->enter($__internal_01bbf0948cadeb4252a42675fb5ac524b2292b3c0ff9a0342f6768b2e67054fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_01bbf0948cadeb4252a42675fb5ac524b2292b3c0ff9a0342f6768b2e67054fc->leave($__internal_01bbf0948cadeb4252a42675fb5ac524b2292b3c0ff9a0342f6768b2e67054fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_104f7c1b65fafc8288717e9cb098e8491aacda0afc3d450482c56239b736da95 = $this->env->getExtension("native_profiler");
        $__internal_104f7c1b65fafc8288717e9cb098e8491aacda0afc3d450482c56239b736da95->enter($__internal_104f7c1b65fafc8288717e9cb098e8491aacda0afc3d450482c56239b736da95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_104f7c1b65fafc8288717e9cb098e8491aacda0afc3d450482c56239b736da95->leave($__internal_104f7c1b65fafc8288717e9cb098e8491aacda0afc3d450482c56239b736da95_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_553e0500244c60c24f9e5547b64df37fe057399efa441db77b4b2c01abe97156 = $this->env->getExtension("native_profiler");
        $__internal_553e0500244c60c24f9e5547b64df37fe057399efa441db77b4b2c01abe97156->enter($__internal_553e0500244c60c24f9e5547b64df37fe057399efa441db77b4b2c01abe97156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_553e0500244c60c24f9e5547b64df37fe057399efa441db77b4b2c01abe97156->leave($__internal_553e0500244c60c24f9e5547b64df37fe057399efa441db77b4b2c01abe97156_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
