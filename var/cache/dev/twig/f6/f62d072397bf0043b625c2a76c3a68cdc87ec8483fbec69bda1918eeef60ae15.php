<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6988b5dc93580966389c2e7e2bcb5a766d667dfdf14c625455726559014f507f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_2a9eefe0066a5b7e6f6fac26a148eb1a9ae6c7c71b19776f3497042a34588c49 = $this->env->getExtension("native_profiler");
        $__internal_2a9eefe0066a5b7e6f6fac26a148eb1a9ae6c7c71b19776f3497042a34588c49->enter($__internal_2a9eefe0066a5b7e6f6fac26a148eb1a9ae6c7c71b19776f3497042a34588c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a9eefe0066a5b7e6f6fac26a148eb1a9ae6c7c71b19776f3497042a34588c49->leave($__internal_2a9eefe0066a5b7e6f6fac26a148eb1a9ae6c7c71b19776f3497042a34588c49_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_df27f0734ac5185b6b2b682d935543d89fe74061e1c0408f60d000fd8a3d81e9 = $this->env->getExtension("native_profiler");
        $__internal_df27f0734ac5185b6b2b682d935543d89fe74061e1c0408f60d000fd8a3d81e9->enter($__internal_df27f0734ac5185b6b2b682d935543d89fe74061e1c0408f60d000fd8a3d81e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_df27f0734ac5185b6b2b682d935543d89fe74061e1c0408f60d000fd8a3d81e9->leave($__internal_df27f0734ac5185b6b2b682d935543d89fe74061e1c0408f60d000fd8a3d81e9_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_247255b103f12f9e342f32878463e1144b01f23bf78aa13a52d821db33045dc2 = $this->env->getExtension("native_profiler");
        $__internal_247255b103f12f9e342f32878463e1144b01f23bf78aa13a52d821db33045dc2->enter($__internal_247255b103f12f9e342f32878463e1144b01f23bf78aa13a52d821db33045dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "    <h2 class=\"page-header\">Please login</h2>
    <div class=\"container\" style= \"width:300px;\">
        <form  class=\"form-signin\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        // line 13
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

            <label for=\"username\" class=\"sr-only\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env,         // line 18
(isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\"
                   style=\"margin-bottom: 5px;\"
                   placeholder=\"Username\"/>

            <label for=\"password\" class=\"sr-only\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Password\"/>

            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
            <label for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        // line 29
        echo " \"  class=\"btn btn-sm btn-primary
            btn-block\" style=\"margin-bottom: 20px;\"/>
        </form>


    </div>



";
        
        $__internal_247255b103f12f9e342f32878463e1144b01f23bf78aa13a52d821db33045dc2->leave($__internal_247255b103f12f9e342f32878463e1144b01f23bf78aa13a52d821db33045dc2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 29,  102 => 28,  97 => 26,  90 => 22,  83 => 18,  82 => 17,  78 => 16,  73 => 14,  70 => 13,  68 => 12,  64 => 10,  58 => 8,  56 => 7,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/*     <h2 class="page-header">Please login</h2>*/
/*     <div class="container" style= "width:300px;">*/
/*         <form  class="form-signin" action="{{ path("fos_user_security_check")*/
/*         }}" method="post">*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*             <label for="username" class="sr-only">{{ 'security.login.username'|trans }}</label>*/
/*             <input type="text" id="username" name="_username" value="{{*/
/*             last_username }}" required="required" class="form-control"*/
/*                    style="margin-bottom: 5px;"*/
/*                    placeholder="Username"/>*/
/* */
/*             <label for="password" class="sr-only">{{ 'security.login.password'|trans }}</label>*/
/*             <input type="password" id="password" name="_password" required="required" class="form-control" placeholder="Password"/>*/
/* */
/*             <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*             <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*             <input type="submit" id="_submit" name="_submit" value="{{*/
/*             'security.login.submit'|trans }} "  class="btn btn-sm btn-primary*/
/*             btn-block" style="margin-bottom: 20px;"/>*/
/*         </form>*/
/* */
/* */
/*     </div>*/
/* */
/* */
/* */
/* {% endblock fos_user_content %}*/
/* {% endblock body %}*/
/* */
