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
        $__internal_32401f2d6a9e7666da5cef23174c3cf29589e2cca9d280e360492f27dd7d0332 = $this->env->getExtension("native_profiler");
        $__internal_32401f2d6a9e7666da5cef23174c3cf29589e2cca9d280e360492f27dd7d0332->enter($__internal_32401f2d6a9e7666da5cef23174c3cf29589e2cca9d280e360492f27dd7d0332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32401f2d6a9e7666da5cef23174c3cf29589e2cca9d280e360492f27dd7d0332->leave($__internal_32401f2d6a9e7666da5cef23174c3cf29589e2cca9d280e360492f27dd7d0332_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_547ca7afa3b85d91dc88607c2c61832758868a1ff2aef73107c062be06cd12d2 = $this->env->getExtension("native_profiler");
        $__internal_547ca7afa3b85d91dc88607c2c61832758868a1ff2aef73107c062be06cd12d2->enter($__internal_547ca7afa3b85d91dc88607c2c61832758868a1ff2aef73107c062be06cd12d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_547ca7afa3b85d91dc88607c2c61832758868a1ff2aef73107c062be06cd12d2->leave($__internal_547ca7afa3b85d91dc88607c2c61832758868a1ff2aef73107c062be06cd12d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_13ca2b4feca89756352dff3369929c79c57a547c056f366b63e367b8cadd947f = $this->env->getExtension("native_profiler");
        $__internal_13ca2b4feca89756352dff3369929c79c57a547c056f366b63e367b8cadd947f->enter($__internal_13ca2b4feca89756352dff3369929c79c57a547c056f366b63e367b8cadd947f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_13ca2b4feca89756352dff3369929c79c57a547c056f366b63e367b8cadd947f->leave($__internal_13ca2b4feca89756352dff3369929c79c57a547c056f366b63e367b8cadd947f_prof);

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
