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
        $__internal_d92810146ab9ece5de70529dc2517abe0c6ba2fc48a4e0725851c0dc25b8b6eb = $this->env->getExtension("native_profiler");
        $__internal_d92810146ab9ece5de70529dc2517abe0c6ba2fc48a4e0725851c0dc25b8b6eb->enter($__internal_d92810146ab9ece5de70529dc2517abe0c6ba2fc48a4e0725851c0dc25b8b6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d92810146ab9ece5de70529dc2517abe0c6ba2fc48a4e0725851c0dc25b8b6eb->leave($__internal_d92810146ab9ece5de70529dc2517abe0c6ba2fc48a4e0725851c0dc25b8b6eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cff35341fc4ea91778a99e4d26fb0567e7fbac835c2d70fe04daf2875f78787d = $this->env->getExtension("native_profiler");
        $__internal_cff35341fc4ea91778a99e4d26fb0567e7fbac835c2d70fe04daf2875f78787d->enter($__internal_cff35341fc4ea91778a99e4d26fb0567e7fbac835c2d70fe04daf2875f78787d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cff35341fc4ea91778a99e4d26fb0567e7fbac835c2d70fe04daf2875f78787d->leave($__internal_cff35341fc4ea91778a99e4d26fb0567e7fbac835c2d70fe04daf2875f78787d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f0f240c125e635343d74a5c4771831e79cde0c12297090167767b7e12964d5d = $this->env->getExtension("native_profiler");
        $__internal_9f0f240c125e635343d74a5c4771831e79cde0c12297090167767b7e12964d5d->enter($__internal_9f0f240c125e635343d74a5c4771831e79cde0c12297090167767b7e12964d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9f0f240c125e635343d74a5c4771831e79cde0c12297090167767b7e12964d5d->leave($__internal_9f0f240c125e635343d74a5c4771831e79cde0c12297090167767b7e12964d5d_prof);

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
