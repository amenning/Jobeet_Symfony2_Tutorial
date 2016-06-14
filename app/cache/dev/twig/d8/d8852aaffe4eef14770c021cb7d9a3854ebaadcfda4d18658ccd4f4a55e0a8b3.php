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
        $__internal_cbc7c0eaa749e89656489870893497f380125aa6a2e0d5d2345cb935610e55f6 = $this->env->getExtension("native_profiler");
        $__internal_cbc7c0eaa749e89656489870893497f380125aa6a2e0d5d2345cb935610e55f6->enter($__internal_cbc7c0eaa749e89656489870893497f380125aa6a2e0d5d2345cb935610e55f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbc7c0eaa749e89656489870893497f380125aa6a2e0d5d2345cb935610e55f6->leave($__internal_cbc7c0eaa749e89656489870893497f380125aa6a2e0d5d2345cb935610e55f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb6bf8c963069c180158c2e66c64b0ba9bde16e3de6dbff21534877f6a17ad1b = $this->env->getExtension("native_profiler");
        $__internal_bb6bf8c963069c180158c2e66c64b0ba9bde16e3de6dbff21534877f6a17ad1b->enter($__internal_bb6bf8c963069c180158c2e66c64b0ba9bde16e3de6dbff21534877f6a17ad1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bb6bf8c963069c180158c2e66c64b0ba9bde16e3de6dbff21534877f6a17ad1b->leave($__internal_bb6bf8c963069c180158c2e66c64b0ba9bde16e3de6dbff21534877f6a17ad1b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccf2e39187ae40a7deb8e4be483fce7e234b07f6a2a66ec11e0b34f700ee2404 = $this->env->getExtension("native_profiler");
        $__internal_ccf2e39187ae40a7deb8e4be483fce7e234b07f6a2a66ec11e0b34f700ee2404->enter($__internal_ccf2e39187ae40a7deb8e4be483fce7e234b07f6a2a66ec11e0b34f700ee2404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ccf2e39187ae40a7deb8e4be483fce7e234b07f6a2a66ec11e0b34f700ee2404->leave($__internal_ccf2e39187ae40a7deb8e4be483fce7e234b07f6a2a66ec11e0b34f700ee2404_prof);

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
