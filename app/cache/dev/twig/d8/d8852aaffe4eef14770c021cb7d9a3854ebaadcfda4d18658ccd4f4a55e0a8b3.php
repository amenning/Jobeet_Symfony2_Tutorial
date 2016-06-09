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
        $__internal_b8f47f9deeb4256c42f2d4b53499c57d902474ca4bfd4c5daa5e60b68e2bd236 = $this->env->getExtension("native_profiler");
        $__internal_b8f47f9deeb4256c42f2d4b53499c57d902474ca4bfd4c5daa5e60b68e2bd236->enter($__internal_b8f47f9deeb4256c42f2d4b53499c57d902474ca4bfd4c5daa5e60b68e2bd236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8f47f9deeb4256c42f2d4b53499c57d902474ca4bfd4c5daa5e60b68e2bd236->leave($__internal_b8f47f9deeb4256c42f2d4b53499c57d902474ca4bfd4c5daa5e60b68e2bd236_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_638c4dbfaa8e27f492e9797348e662cdf8699853b015bfb3c97cf80ff406e290 = $this->env->getExtension("native_profiler");
        $__internal_638c4dbfaa8e27f492e9797348e662cdf8699853b015bfb3c97cf80ff406e290->enter($__internal_638c4dbfaa8e27f492e9797348e662cdf8699853b015bfb3c97cf80ff406e290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_638c4dbfaa8e27f492e9797348e662cdf8699853b015bfb3c97cf80ff406e290->leave($__internal_638c4dbfaa8e27f492e9797348e662cdf8699853b015bfb3c97cf80ff406e290_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_81953f059f00c8677df79770620bba76d608fc2eddc8ef2a6be1e7b13f553282 = $this->env->getExtension("native_profiler");
        $__internal_81953f059f00c8677df79770620bba76d608fc2eddc8ef2a6be1e7b13f553282->enter($__internal_81953f059f00c8677df79770620bba76d608fc2eddc8ef2a6be1e7b13f553282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_81953f059f00c8677df79770620bba76d608fc2eddc8ef2a6be1e7b13f553282->leave($__internal_81953f059f00c8677df79770620bba76d608fc2eddc8ef2a6be1e7b13f553282_prof);

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
