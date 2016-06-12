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
        $__internal_61bb57f81a3568566833562d60e2486088751880b7007b16c7d6d04b53d2998a = $this->env->getExtension("native_profiler");
        $__internal_61bb57f81a3568566833562d60e2486088751880b7007b16c7d6d04b53d2998a->enter($__internal_61bb57f81a3568566833562d60e2486088751880b7007b16c7d6d04b53d2998a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61bb57f81a3568566833562d60e2486088751880b7007b16c7d6d04b53d2998a->leave($__internal_61bb57f81a3568566833562d60e2486088751880b7007b16c7d6d04b53d2998a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a548c44466ac5976de796aba250e6f7af8fc83f8b34f0f87ad7744b6b8358364 = $this->env->getExtension("native_profiler");
        $__internal_a548c44466ac5976de796aba250e6f7af8fc83f8b34f0f87ad7744b6b8358364->enter($__internal_a548c44466ac5976de796aba250e6f7af8fc83f8b34f0f87ad7744b6b8358364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a548c44466ac5976de796aba250e6f7af8fc83f8b34f0f87ad7744b6b8358364->leave($__internal_a548c44466ac5976de796aba250e6f7af8fc83f8b34f0f87ad7744b6b8358364_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d719d6a5ebf5f41daf37c2326f5b788a718d8c6a19e92c45e35454c0c13fbb2c = $this->env->getExtension("native_profiler");
        $__internal_d719d6a5ebf5f41daf37c2326f5b788a718d8c6a19e92c45e35454c0c13fbb2c->enter($__internal_d719d6a5ebf5f41daf37c2326f5b788a718d8c6a19e92c45e35454c0c13fbb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d719d6a5ebf5f41daf37c2326f5b788a718d8c6a19e92c45e35454c0c13fbb2c->leave($__internal_d719d6a5ebf5f41daf37c2326f5b788a718d8c6a19e92c45e35454c0c13fbb2c_prof);

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
