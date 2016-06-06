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
        $__internal_ae681c6f257a98a4dd0c80f1cdbb44a25b47f5aa5a63daf17f2267dcbb7b16da = $this->env->getExtension("native_profiler");
        $__internal_ae681c6f257a98a4dd0c80f1cdbb44a25b47f5aa5a63daf17f2267dcbb7b16da->enter($__internal_ae681c6f257a98a4dd0c80f1cdbb44a25b47f5aa5a63daf17f2267dcbb7b16da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae681c6f257a98a4dd0c80f1cdbb44a25b47f5aa5a63daf17f2267dcbb7b16da->leave($__internal_ae681c6f257a98a4dd0c80f1cdbb44a25b47f5aa5a63daf17f2267dcbb7b16da_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae0ca9776b64ee85ccce9e9037f5945a20ed0e80ad4c0979249dcd90b4f48df0 = $this->env->getExtension("native_profiler");
        $__internal_ae0ca9776b64ee85ccce9e9037f5945a20ed0e80ad4c0979249dcd90b4f48df0->enter($__internal_ae0ca9776b64ee85ccce9e9037f5945a20ed0e80ad4c0979249dcd90b4f48df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ae0ca9776b64ee85ccce9e9037f5945a20ed0e80ad4c0979249dcd90b4f48df0->leave($__internal_ae0ca9776b64ee85ccce9e9037f5945a20ed0e80ad4c0979249dcd90b4f48df0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_70f6d491ffe541077c53698c596d8c1b758435b5cd3d10c5094d7d395db0330f = $this->env->getExtension("native_profiler");
        $__internal_70f6d491ffe541077c53698c596d8c1b758435b5cd3d10c5094d7d395db0330f->enter($__internal_70f6d491ffe541077c53698c596d8c1b758435b5cd3d10c5094d7d395db0330f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_70f6d491ffe541077c53698c596d8c1b758435b5cd3d10c5094d7d395db0330f->leave($__internal_70f6d491ffe541077c53698c596d8c1b758435b5cd3d10c5094d7d395db0330f_prof);

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
