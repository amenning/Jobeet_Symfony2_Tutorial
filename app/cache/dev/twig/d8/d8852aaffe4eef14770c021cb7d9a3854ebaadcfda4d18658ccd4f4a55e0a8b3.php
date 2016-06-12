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
        $__internal_93ae9825866b18463ba2975e4fa32776fb89c53416e50a9aa207fe6239704d38 = $this->env->getExtension("native_profiler");
        $__internal_93ae9825866b18463ba2975e4fa32776fb89c53416e50a9aa207fe6239704d38->enter($__internal_93ae9825866b18463ba2975e4fa32776fb89c53416e50a9aa207fe6239704d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93ae9825866b18463ba2975e4fa32776fb89c53416e50a9aa207fe6239704d38->leave($__internal_93ae9825866b18463ba2975e4fa32776fb89c53416e50a9aa207fe6239704d38_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2c3c4c825c0d5d8a2c5ac52c3816228b80eddf6ad0811460fc5f49b0b1e59ae = $this->env->getExtension("native_profiler");
        $__internal_e2c3c4c825c0d5d8a2c5ac52c3816228b80eddf6ad0811460fc5f49b0b1e59ae->enter($__internal_e2c3c4c825c0d5d8a2c5ac52c3816228b80eddf6ad0811460fc5f49b0b1e59ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e2c3c4c825c0d5d8a2c5ac52c3816228b80eddf6ad0811460fc5f49b0b1e59ae->leave($__internal_e2c3c4c825c0d5d8a2c5ac52c3816228b80eddf6ad0811460fc5f49b0b1e59ae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcfc70f4c5000668f9b999d5b5c3c46a60af9bfa95620fe493bac9ecf33f73d9 = $this->env->getExtension("native_profiler");
        $__internal_bcfc70f4c5000668f9b999d5b5c3c46a60af9bfa95620fe493bac9ecf33f73d9->enter($__internal_bcfc70f4c5000668f9b999d5b5c3c46a60af9bfa95620fe493bac9ecf33f73d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bcfc70f4c5000668f9b999d5b5c3c46a60af9bfa95620fe493bac9ecf33f73d9->leave($__internal_bcfc70f4c5000668f9b999d5b5c3c46a60af9bfa95620fe493bac9ecf33f73d9_prof);

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
