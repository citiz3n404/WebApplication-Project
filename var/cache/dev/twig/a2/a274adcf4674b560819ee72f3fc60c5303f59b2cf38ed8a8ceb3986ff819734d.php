<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_75ee1c47bb82b828f9e9841609cc2403fa0a6e1bd60fe21d99aa2bf3dddf4840 extends Twig_Template
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
        $__internal_b787f88c5cae8c215f646e82cab32d1aa378e73486d0eb1d5b4d970b16874b2b = $this->env->getExtension("native_profiler");
        $__internal_b787f88c5cae8c215f646e82cab32d1aa378e73486d0eb1d5b4d970b16874b2b->enter($__internal_b787f88c5cae8c215f646e82cab32d1aa378e73486d0eb1d5b4d970b16874b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b787f88c5cae8c215f646e82cab32d1aa378e73486d0eb1d5b4d970b16874b2b->leave($__internal_b787f88c5cae8c215f646e82cab32d1aa378e73486d0eb1d5b4d970b16874b2b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_097bc2f633161fcd866cbadc796d04395f454a8d70f36f01c5fc68af68741e6f = $this->env->getExtension("native_profiler");
        $__internal_097bc2f633161fcd866cbadc796d04395f454a8d70f36f01c5fc68af68741e6f->enter($__internal_097bc2f633161fcd866cbadc796d04395f454a8d70f36f01c5fc68af68741e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_097bc2f633161fcd866cbadc796d04395f454a8d70f36f01c5fc68af68741e6f->leave($__internal_097bc2f633161fcd866cbadc796d04395f454a8d70f36f01c5fc68af68741e6f_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3eb6277bd6a2c23ed5c78033dd7e6f2ec2c149fada3f6756ce46a1ac28051a66 = $this->env->getExtension("native_profiler");
        $__internal_3eb6277bd6a2c23ed5c78033dd7e6f2ec2c149fada3f6756ce46a1ac28051a66->enter($__internal_3eb6277bd6a2c23ed5c78033dd7e6f2ec2c149fada3f6756ce46a1ac28051a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_3eb6277bd6a2c23ed5c78033dd7e6f2ec2c149fada3f6756ce46a1ac28051a66->leave($__internal_3eb6277bd6a2c23ed5c78033dd7e6f2ec2c149fada3f6756ce46a1ac28051a66_prof);

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
