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
        $__internal_0a2b910d66dfed062346ccce36ca23f0e61609f6d0a29c3257b574b184ab17ba = $this->env->getExtension("native_profiler");
        $__internal_0a2b910d66dfed062346ccce36ca23f0e61609f6d0a29c3257b574b184ab17ba->enter($__internal_0a2b910d66dfed062346ccce36ca23f0e61609f6d0a29c3257b574b184ab17ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a2b910d66dfed062346ccce36ca23f0e61609f6d0a29c3257b574b184ab17ba->leave($__internal_0a2b910d66dfed062346ccce36ca23f0e61609f6d0a29c3257b574b184ab17ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_855a05e64bab32cd385f457f96ccfd7d4fbdc43146089dae9dcdafa9a4975f1a = $this->env->getExtension("native_profiler");
        $__internal_855a05e64bab32cd385f457f96ccfd7d4fbdc43146089dae9dcdafa9a4975f1a->enter($__internal_855a05e64bab32cd385f457f96ccfd7d4fbdc43146089dae9dcdafa9a4975f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_855a05e64bab32cd385f457f96ccfd7d4fbdc43146089dae9dcdafa9a4975f1a->leave($__internal_855a05e64bab32cd385f457f96ccfd7d4fbdc43146089dae9dcdafa9a4975f1a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c732e7f9d02851a79c2cd9d68fd03b1aaf002187a9dae82a8a9867f9219558ce = $this->env->getExtension("native_profiler");
        $__internal_c732e7f9d02851a79c2cd9d68fd03b1aaf002187a9dae82a8a9867f9219558ce->enter($__internal_c732e7f9d02851a79c2cd9d68fd03b1aaf002187a9dae82a8a9867f9219558ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c732e7f9d02851a79c2cd9d68fd03b1aaf002187a9dae82a8a9867f9219558ce->leave($__internal_c732e7f9d02851a79c2cd9d68fd03b1aaf002187a9dae82a8a9867f9219558ce_prof);

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
