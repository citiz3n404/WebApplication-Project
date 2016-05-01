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
        $__internal_601ee5f8d03ea98dd128b0175424ae84eda8f6c605a894c60c125ff1018066f0 = $this->env->getExtension("native_profiler");
        $__internal_601ee5f8d03ea98dd128b0175424ae84eda8f6c605a894c60c125ff1018066f0->enter($__internal_601ee5f8d03ea98dd128b0175424ae84eda8f6c605a894c60c125ff1018066f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_601ee5f8d03ea98dd128b0175424ae84eda8f6c605a894c60c125ff1018066f0->leave($__internal_601ee5f8d03ea98dd128b0175424ae84eda8f6c605a894c60c125ff1018066f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e99de4ebe8af9f657fde265d5fb77672854d74f7b619c358d446682c9fe1d164 = $this->env->getExtension("native_profiler");
        $__internal_e99de4ebe8af9f657fde265d5fb77672854d74f7b619c358d446682c9fe1d164->enter($__internal_e99de4ebe8af9f657fde265d5fb77672854d74f7b619c358d446682c9fe1d164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e99de4ebe8af9f657fde265d5fb77672854d74f7b619c358d446682c9fe1d164->leave($__internal_e99de4ebe8af9f657fde265d5fb77672854d74f7b619c358d446682c9fe1d164_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69b3f916ecca227fd1af72c6d11a263402bc302d7752a935bdf794ade4aa49fa = $this->env->getExtension("native_profiler");
        $__internal_69b3f916ecca227fd1af72c6d11a263402bc302d7752a935bdf794ade4aa49fa->enter($__internal_69b3f916ecca227fd1af72c6d11a263402bc302d7752a935bdf794ade4aa49fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69b3f916ecca227fd1af72c6d11a263402bc302d7752a935bdf794ade4aa49fa->leave($__internal_69b3f916ecca227fd1af72c6d11a263402bc302d7752a935bdf794ade4aa49fa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4dbf6edd05732cc58377641826f64df83b4ea7ff1523210153417dccbf20556f = $this->env->getExtension("native_profiler");
        $__internal_4dbf6edd05732cc58377641826f64df83b4ea7ff1523210153417dccbf20556f->enter($__internal_4dbf6edd05732cc58377641826f64df83b4ea7ff1523210153417dccbf20556f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4dbf6edd05732cc58377641826f64df83b4ea7ff1523210153417dccbf20556f->leave($__internal_4dbf6edd05732cc58377641826f64df83b4ea7ff1523210153417dccbf20556f_prof);

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
