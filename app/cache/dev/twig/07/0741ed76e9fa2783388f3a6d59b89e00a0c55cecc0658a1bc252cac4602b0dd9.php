<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9070871fd559bba25e49457e0cba38462f72698cd9a825d67a43b21ecf92665f extends Twig_Template
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
        $__internal_6bb6685d5c0c8b2b525bb58ebedee5b35425d782a0f2fff25be50358df05cb8a = $this->env->getExtension("native_profiler");
        $__internal_6bb6685d5c0c8b2b525bb58ebedee5b35425d782a0f2fff25be50358df05cb8a->enter($__internal_6bb6685d5c0c8b2b525bb58ebedee5b35425d782a0f2fff25be50358df05cb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bb6685d5c0c8b2b525bb58ebedee5b35425d782a0f2fff25be50358df05cb8a->leave($__internal_6bb6685d5c0c8b2b525bb58ebedee5b35425d782a0f2fff25be50358df05cb8a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecb3d8ec4abd855099c09c45b0cbab9c556c44ae7a064ca129f2de4b026da926 = $this->env->getExtension("native_profiler");
        $__internal_ecb3d8ec4abd855099c09c45b0cbab9c556c44ae7a064ca129f2de4b026da926->enter($__internal_ecb3d8ec4abd855099c09c45b0cbab9c556c44ae7a064ca129f2de4b026da926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ecb3d8ec4abd855099c09c45b0cbab9c556c44ae7a064ca129f2de4b026da926->leave($__internal_ecb3d8ec4abd855099c09c45b0cbab9c556c44ae7a064ca129f2de4b026da926_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14e902d55854c09b639be415d1cae08295f1bcc9acf959c5f9f7651f5d9908c1 = $this->env->getExtension("native_profiler");
        $__internal_14e902d55854c09b639be415d1cae08295f1bcc9acf959c5f9f7651f5d9908c1->enter($__internal_14e902d55854c09b639be415d1cae08295f1bcc9acf959c5f9f7651f5d9908c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_14e902d55854c09b639be415d1cae08295f1bcc9acf959c5f9f7651f5d9908c1->leave($__internal_14e902d55854c09b639be415d1cae08295f1bcc9acf959c5f9f7651f5d9908c1_prof);

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
