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
        $__internal_123974ffde5e36d7c7220220e8eb28dc5452dff73910a12eb4de081a72ace99e = $this->env->getExtension("native_profiler");
        $__internal_123974ffde5e36d7c7220220e8eb28dc5452dff73910a12eb4de081a72ace99e->enter($__internal_123974ffde5e36d7c7220220e8eb28dc5452dff73910a12eb4de081a72ace99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_123974ffde5e36d7c7220220e8eb28dc5452dff73910a12eb4de081a72ace99e->leave($__internal_123974ffde5e36d7c7220220e8eb28dc5452dff73910a12eb4de081a72ace99e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e04481c5f4252094a1eeba5d517c82a9c83d3c11c81274184982d233960050f = $this->env->getExtension("native_profiler");
        $__internal_6e04481c5f4252094a1eeba5d517c82a9c83d3c11c81274184982d233960050f->enter($__internal_6e04481c5f4252094a1eeba5d517c82a9c83d3c11c81274184982d233960050f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6e04481c5f4252094a1eeba5d517c82a9c83d3c11c81274184982d233960050f->leave($__internal_6e04481c5f4252094a1eeba5d517c82a9c83d3c11c81274184982d233960050f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c0c1bc72aa6b5317dc1e5057c2ac8b7fbf8e65b5f55930a8399b7e79bbc7971 = $this->env->getExtension("native_profiler");
        $__internal_3c0c1bc72aa6b5317dc1e5057c2ac8b7fbf8e65b5f55930a8399b7e79bbc7971->enter($__internal_3c0c1bc72aa6b5317dc1e5057c2ac8b7fbf8e65b5f55930a8399b7e79bbc7971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3c0c1bc72aa6b5317dc1e5057c2ac8b7fbf8e65b5f55930a8399b7e79bbc7971->leave($__internal_3c0c1bc72aa6b5317dc1e5057c2ac8b7fbf8e65b5f55930a8399b7e79bbc7971_prof);

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
