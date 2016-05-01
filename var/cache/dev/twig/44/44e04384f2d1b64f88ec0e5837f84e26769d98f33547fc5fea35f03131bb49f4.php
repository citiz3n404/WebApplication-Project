<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_db09b546b62b30eab9b09e85f485c2567d0ed1750de172f37e91a5f1e1033169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Default:index.html.twig", 1);
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
        $__internal_b1c63f162ed7ee836475de02ad63055977e11c12372abadb77df8dae765a4920 = $this->env->getExtension("native_profiler");
        $__internal_b1c63f162ed7ee836475de02ad63055977e11c12372abadb77df8dae765a4920->enter($__internal_b1c63f162ed7ee836475de02ad63055977e11c12372abadb77df8dae765a4920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1c63f162ed7ee836475de02ad63055977e11c12372abadb77df8dae765a4920->leave($__internal_b1c63f162ed7ee836475de02ad63055977e11c12372abadb77df8dae765a4920_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad3560494c51c07dcc328da845e00b51c5c9c979b6bde73922c952b6b259c76d = $this->env->getExtension("native_profiler");
        $__internal_ad3560494c51c07dcc328da845e00b51c5c9c979b6bde73922c952b6b259c76d->enter($__internal_ad3560494c51c07dcc328da845e00b51c5c9c979b6bde73922c952b6b259c76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    UserBundle
";
        
        $__internal_ad3560494c51c07dcc328da845e00b51c5c9c979b6bde73922c952b6b259c76d->leave($__internal_ad3560494c51c07dcc328da845e00b51c5c9c979b6bde73922c952b6b259c76d_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
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
/*     UserBundle*/
/* {% endblock %}*/
