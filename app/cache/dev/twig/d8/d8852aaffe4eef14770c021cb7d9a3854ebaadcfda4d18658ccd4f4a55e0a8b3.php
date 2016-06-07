<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_79e0ae89bd2a74e65a21829a77e371eb1fdb0b7b94ec0087fc9e4f557bc5f4ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_ff99781be5d6c4e2af57dc09a383e7d9cff352325f9877ff444d5b3d9b2e92d9 = $this->env->getExtension("native_profiler");
        $__internal_ff99781be5d6c4e2af57dc09a383e7d9cff352325f9877ff444d5b3d9b2e92d9->enter($__internal_ff99781be5d6c4e2af57dc09a383e7d9cff352325f9877ff444d5b3d9b2e92d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff99781be5d6c4e2af57dc09a383e7d9cff352325f9877ff444d5b3d9b2e92d9->leave($__internal_ff99781be5d6c4e2af57dc09a383e7d9cff352325f9877ff444d5b3d9b2e92d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad9b1920fddbd527406488bf0a71dcf4061d37032f735a46bae8ffcc618d48cb = $this->env->getExtension("native_profiler");
        $__internal_ad9b1920fddbd527406488bf0a71dcf4061d37032f735a46bae8ffcc618d48cb->enter($__internal_ad9b1920fddbd527406488bf0a71dcf4061d37032f735a46bae8ffcc618d48cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ad9b1920fddbd527406488bf0a71dcf4061d37032f735a46bae8ffcc618d48cb->leave($__internal_ad9b1920fddbd527406488bf0a71dcf4061d37032f735a46bae8ffcc618d48cb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_88a0462b0785f87f7e57618ffb80c109bb0bde793a5e6dae80c13029dc4db6e5 = $this->env->getExtension("native_profiler");
        $__internal_88a0462b0785f87f7e57618ffb80c109bb0bde793a5e6dae80c13029dc4db6e5->enter($__internal_88a0462b0785f87f7e57618ffb80c109bb0bde793a5e6dae80c13029dc4db6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_88a0462b0785f87f7e57618ffb80c109bb0bde793a5e6dae80c13029dc4db6e5->leave($__internal_88a0462b0785f87f7e57618ffb80c109bb0bde793a5e6dae80c13029dc4db6e5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
