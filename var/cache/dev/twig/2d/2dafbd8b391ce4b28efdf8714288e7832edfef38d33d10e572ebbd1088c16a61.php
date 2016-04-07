<?php

/* base.html.twig */
class __TwigTemplate_d3b9f76c1c872fcdc8c66441917a479d28f117d99c64b3ba55828a434558154a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec92048fcb72ed25004c0167fc239b4a88e65f27949bcb4551576e34788e610b = $this->env->getExtension("native_profiler");
        $__internal_ec92048fcb72ed25004c0167fc239b4a88e65f27949bcb4551576e34788e610b->enter($__internal_ec92048fcb72ed25004c0167fc239b4a88e65f27949bcb4551576e34788e610b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ec92048fcb72ed25004c0167fc239b4a88e65f27949bcb4551576e34788e610b->leave($__internal_ec92048fcb72ed25004c0167fc239b4a88e65f27949bcb4551576e34788e610b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d5f3bc510c0b61fd5b504ab20ea7d86b39e5f4abdbc466bece00b58e6fd715b = $this->env->getExtension("native_profiler");
        $__internal_6d5f3bc510c0b61fd5b504ab20ea7d86b39e5f4abdbc466bece00b58e6fd715b->enter($__internal_6d5f3bc510c0b61fd5b504ab20ea7d86b39e5f4abdbc466bece00b58e6fd715b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6d5f3bc510c0b61fd5b504ab20ea7d86b39e5f4abdbc466bece00b58e6fd715b->leave($__internal_6d5f3bc510c0b61fd5b504ab20ea7d86b39e5f4abdbc466bece00b58e6fd715b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_128fd1bb339523684743aa693fd6609f23f6e77ee3a9fd727bbbd23c132051a2 = $this->env->getExtension("native_profiler");
        $__internal_128fd1bb339523684743aa693fd6609f23f6e77ee3a9fd727bbbd23c132051a2->enter($__internal_128fd1bb339523684743aa693fd6609f23f6e77ee3a9fd727bbbd23c132051a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_128fd1bb339523684743aa693fd6609f23f6e77ee3a9fd727bbbd23c132051a2->leave($__internal_128fd1bb339523684743aa693fd6609f23f6e77ee3a9fd727bbbd23c132051a2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ae5544eb7482341b5b20e3777d743d5357ea46c5339afd14fc31033c9dcec2d = $this->env->getExtension("native_profiler");
        $__internal_0ae5544eb7482341b5b20e3777d743d5357ea46c5339afd14fc31033c9dcec2d->enter($__internal_0ae5544eb7482341b5b20e3777d743d5357ea46c5339afd14fc31033c9dcec2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0ae5544eb7482341b5b20e3777d743d5357ea46c5339afd14fc31033c9dcec2d->leave($__internal_0ae5544eb7482341b5b20e3777d743d5357ea46c5339afd14fc31033c9dcec2d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_694854a3c1feaa77953f97f3fb93f19e89d524926b641981c601ad793fefcee0 = $this->env->getExtension("native_profiler");
        $__internal_694854a3c1feaa77953f97f3fb93f19e89d524926b641981c601ad793fefcee0->enter($__internal_694854a3c1feaa77953f97f3fb93f19e89d524926b641981c601ad793fefcee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_694854a3c1feaa77953f97f3fb93f19e89d524926b641981c601ad793fefcee0->leave($__internal_694854a3c1feaa77953f97f3fb93f19e89d524926b641981c601ad793fefcee0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
