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
        $__internal_db8f7bbd3bc7e7a1eb0c0f28c8ac7b1c7a8fec303cbfc5c36d7ce9f23c97dca2 = $this->env->getExtension("native_profiler");
        $__internal_db8f7bbd3bc7e7a1eb0c0f28c8ac7b1c7a8fec303cbfc5c36d7ce9f23c97dca2->enter($__internal_db8f7bbd3bc7e7a1eb0c0f28c8ac7b1c7a8fec303cbfc5c36d7ce9f23c97dca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db8f7bbd3bc7e7a1eb0c0f28c8ac7b1c7a8fec303cbfc5c36d7ce9f23c97dca2->leave($__internal_db8f7bbd3bc7e7a1eb0c0f28c8ac7b1c7a8fec303cbfc5c36d7ce9f23c97dca2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8aefceffa6f6dd5f5da4b883cbc6819d01a4199bb0a4792643dce1d5630c6a20 = $this->env->getExtension("native_profiler");
        $__internal_8aefceffa6f6dd5f5da4b883cbc6819d01a4199bb0a4792643dce1d5630c6a20->enter($__internal_8aefceffa6f6dd5f5da4b883cbc6819d01a4199bb0a4792643dce1d5630c6a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8aefceffa6f6dd5f5da4b883cbc6819d01a4199bb0a4792643dce1d5630c6a20->leave($__internal_8aefceffa6f6dd5f5da4b883cbc6819d01a4199bb0a4792643dce1d5630c6a20_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d8af63cdeb88ff9085adbac71e22a8a622b1947657811fb73d8fb31b2781192 = $this->env->getExtension("native_profiler");
        $__internal_0d8af63cdeb88ff9085adbac71e22a8a622b1947657811fb73d8fb31b2781192->enter($__internal_0d8af63cdeb88ff9085adbac71e22a8a622b1947657811fb73d8fb31b2781192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0d8af63cdeb88ff9085adbac71e22a8a622b1947657811fb73d8fb31b2781192->leave($__internal_0d8af63cdeb88ff9085adbac71e22a8a622b1947657811fb73d8fb31b2781192_prof);

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
