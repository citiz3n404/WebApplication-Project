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
        $__internal_bac2f85de67cd9a11b5f9d49c7fbf21b260cea2a32203fe24eb5b0f00b4f82e9 = $this->env->getExtension("native_profiler");
        $__internal_bac2f85de67cd9a11b5f9d49c7fbf21b260cea2a32203fe24eb5b0f00b4f82e9->enter($__internal_bac2f85de67cd9a11b5f9d49c7fbf21b260cea2a32203fe24eb5b0f00b4f82e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bac2f85de67cd9a11b5f9d49c7fbf21b260cea2a32203fe24eb5b0f00b4f82e9->leave($__internal_bac2f85de67cd9a11b5f9d49c7fbf21b260cea2a32203fe24eb5b0f00b4f82e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78bca2773ad4291fdaa4d107393cc057efc03fe43bc3dabf604791dfe08cdb74 = $this->env->getExtension("native_profiler");
        $__internal_78bca2773ad4291fdaa4d107393cc057efc03fe43bc3dabf604791dfe08cdb74->enter($__internal_78bca2773ad4291fdaa4d107393cc057efc03fe43bc3dabf604791dfe08cdb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_78bca2773ad4291fdaa4d107393cc057efc03fe43bc3dabf604791dfe08cdb74->leave($__internal_78bca2773ad4291fdaa4d107393cc057efc03fe43bc3dabf604791dfe08cdb74_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04863c1ff0ea05eaaa5448830710a5aea946e279f7e9a2ff52b8092876c4acba = $this->env->getExtension("native_profiler");
        $__internal_04863c1ff0ea05eaaa5448830710a5aea946e279f7e9a2ff52b8092876c4acba->enter($__internal_04863c1ff0ea05eaaa5448830710a5aea946e279f7e9a2ff52b8092876c4acba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04863c1ff0ea05eaaa5448830710a5aea946e279f7e9a2ff52b8092876c4acba->leave($__internal_04863c1ff0ea05eaaa5448830710a5aea946e279f7e9a2ff52b8092876c4acba_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0be3b01265abe75085b109459033e8dbe5e8f41fd72097764376e11348d4ab9 = $this->env->getExtension("native_profiler");
        $__internal_b0be3b01265abe75085b109459033e8dbe5e8f41fd72097764376e11348d4ab9->enter($__internal_b0be3b01265abe75085b109459033e8dbe5e8f41fd72097764376e11348d4ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b0be3b01265abe75085b109459033e8dbe5e8f41fd72097764376e11348d4ab9->leave($__internal_b0be3b01265abe75085b109459033e8dbe5e8f41fd72097764376e11348d4ab9_prof);

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
