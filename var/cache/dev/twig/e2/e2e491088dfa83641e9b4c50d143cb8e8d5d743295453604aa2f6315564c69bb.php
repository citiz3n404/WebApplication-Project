<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d93cdf5362fdc6bcf6138617ec08e07342f4303efbd5a64274870fa0a90fdc06 extends Twig_Template
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
        $__internal_4ef59e44d57d08c89535c602d959b74762d3f89415d3442bbb4be80f65d787c5 = $this->env->getExtension("native_profiler");
        $__internal_4ef59e44d57d08c89535c602d959b74762d3f89415d3442bbb4be80f65d787c5->enter($__internal_4ef59e44d57d08c89535c602d959b74762d3f89415d3442bbb4be80f65d787c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ef59e44d57d08c89535c602d959b74762d3f89415d3442bbb4be80f65d787c5->leave($__internal_4ef59e44d57d08c89535c602d959b74762d3f89415d3442bbb4be80f65d787c5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c719041a0aa402f414b89947a0f6f5620c9a675dbc7eb482773a4d28fac08d6c = $this->env->getExtension("native_profiler");
        $__internal_c719041a0aa402f414b89947a0f6f5620c9a675dbc7eb482773a4d28fac08d6c->enter($__internal_c719041a0aa402f414b89947a0f6f5620c9a675dbc7eb482773a4d28fac08d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c719041a0aa402f414b89947a0f6f5620c9a675dbc7eb482773a4d28fac08d6c->leave($__internal_c719041a0aa402f414b89947a0f6f5620c9a675dbc7eb482773a4d28fac08d6c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a7726ed3c1d45346f8cf6862efc004468292f4f0af253378d4ada17a3507f343 = $this->env->getExtension("native_profiler");
        $__internal_a7726ed3c1d45346f8cf6862efc004468292f4f0af253378d4ada17a3507f343->enter($__internal_a7726ed3c1d45346f8cf6862efc004468292f4f0af253378d4ada17a3507f343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a7726ed3c1d45346f8cf6862efc004468292f4f0af253378d4ada17a3507f343->leave($__internal_a7726ed3c1d45346f8cf6862efc004468292f4f0af253378d4ada17a3507f343_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_887a3420947d70db7089d6177c7884a8a71d862b98bde395642ddc3d0db72df5 = $this->env->getExtension("native_profiler");
        $__internal_887a3420947d70db7089d6177c7884a8a71d862b98bde395642ddc3d0db72df5->enter($__internal_887a3420947d70db7089d6177c7884a8a71d862b98bde395642ddc3d0db72df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_887a3420947d70db7089d6177c7884a8a71d862b98bde395642ddc3d0db72df5->leave($__internal_887a3420947d70db7089d6177c7884a8a71d862b98bde395642ddc3d0db72df5_prof);

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
