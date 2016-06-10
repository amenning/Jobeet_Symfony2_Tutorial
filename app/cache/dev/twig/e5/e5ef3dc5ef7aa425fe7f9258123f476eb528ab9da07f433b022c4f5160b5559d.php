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
        $__internal_c8b28878e45661f8ff5d7e21a698cfa81b15a7318b21ff9281ac4892d408ddd8 = $this->env->getExtension("native_profiler");
        $__internal_c8b28878e45661f8ff5d7e21a698cfa81b15a7318b21ff9281ac4892d408ddd8->enter($__internal_c8b28878e45661f8ff5d7e21a698cfa81b15a7318b21ff9281ac4892d408ddd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8b28878e45661f8ff5d7e21a698cfa81b15a7318b21ff9281ac4892d408ddd8->leave($__internal_c8b28878e45661f8ff5d7e21a698cfa81b15a7318b21ff9281ac4892d408ddd8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_291928bb9367f792318e1dddd2eed45548b10cbf90166e38026bef207497c044 = $this->env->getExtension("native_profiler");
        $__internal_291928bb9367f792318e1dddd2eed45548b10cbf90166e38026bef207497c044->enter($__internal_291928bb9367f792318e1dddd2eed45548b10cbf90166e38026bef207497c044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_291928bb9367f792318e1dddd2eed45548b10cbf90166e38026bef207497c044->leave($__internal_291928bb9367f792318e1dddd2eed45548b10cbf90166e38026bef207497c044_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ad1d0c11113ab17a5d16f237c1b81d7aa90af302455b57e671e3010fe92d5d7 = $this->env->getExtension("native_profiler");
        $__internal_0ad1d0c11113ab17a5d16f237c1b81d7aa90af302455b57e671e3010fe92d5d7->enter($__internal_0ad1d0c11113ab17a5d16f237c1b81d7aa90af302455b57e671e3010fe92d5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0ad1d0c11113ab17a5d16f237c1b81d7aa90af302455b57e671e3010fe92d5d7->leave($__internal_0ad1d0c11113ab17a5d16f237c1b81d7aa90af302455b57e671e3010fe92d5d7_prof);

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
