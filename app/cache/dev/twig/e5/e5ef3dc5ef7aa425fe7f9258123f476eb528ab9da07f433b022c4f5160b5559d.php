<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c87de4d8e6686f86cac93fe8d9df598dd57998ab64a5ca48666e5cef81b22526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe68d575c5f8800d9a49136efb4a77981c1dbf22eca28c07d1cbc8bf7331b5fb = $this->env->getExtension("native_profiler");
        $__internal_fe68d575c5f8800d9a49136efb4a77981c1dbf22eca28c07d1cbc8bf7331b5fb->enter($__internal_fe68d575c5f8800d9a49136efb4a77981c1dbf22eca28c07d1cbc8bf7331b5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe68d575c5f8800d9a49136efb4a77981c1dbf22eca28c07d1cbc8bf7331b5fb->leave($__internal_fe68d575c5f8800d9a49136efb4a77981c1dbf22eca28c07d1cbc8bf7331b5fb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_54c26ca67ab3bb5f6ae9971955f3ac7ec774fe676e153ebaf6fea5440388d90c = $this->env->getExtension("native_profiler");
        $__internal_54c26ca67ab3bb5f6ae9971955f3ac7ec774fe676e153ebaf6fea5440388d90c->enter($__internal_54c26ca67ab3bb5f6ae9971955f3ac7ec774fe676e153ebaf6fea5440388d90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_54c26ca67ab3bb5f6ae9971955f3ac7ec774fe676e153ebaf6fea5440388d90c->leave($__internal_54c26ca67ab3bb5f6ae9971955f3ac7ec774fe676e153ebaf6fea5440388d90c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_27a611deb52355e2d34df4e0c4eb3f966c8e8c941b59501bcedbe1a067c85278 = $this->env->getExtension("native_profiler");
        $__internal_27a611deb52355e2d34df4e0c4eb3f966c8e8c941b59501bcedbe1a067c85278->enter($__internal_27a611deb52355e2d34df4e0c4eb3f966c8e8c941b59501bcedbe1a067c85278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_27a611deb52355e2d34df4e0c4eb3f966c8e8c941b59501bcedbe1a067c85278->leave($__internal_27a611deb52355e2d34df4e0c4eb3f966c8e8c941b59501bcedbe1a067c85278_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
