<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_54234b1ebe8ce7d3a7dcbfcc334e52a20ee570d2a1127c371b232407937f69c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_30613107eb0ef20249479b1beea53a504c9a88f0f0952e7473b627de16c7399f = $this->env->getExtension("native_profiler");
        $__internal_30613107eb0ef20249479b1beea53a504c9a88f0f0952e7473b627de16c7399f->enter($__internal_30613107eb0ef20249479b1beea53a504c9a88f0f0952e7473b627de16c7399f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30613107eb0ef20249479b1beea53a504c9a88f0f0952e7473b627de16c7399f->leave($__internal_30613107eb0ef20249479b1beea53a504c9a88f0f0952e7473b627de16c7399f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_397c6f612653e5126d425d25cae3e2dffd4ffa81cad7c0ac0939f89c650621cb = $this->env->getExtension("native_profiler");
        $__internal_397c6f612653e5126d425d25cae3e2dffd4ffa81cad7c0ac0939f89c650621cb->enter($__internal_397c6f612653e5126d425d25cae3e2dffd4ffa81cad7c0ac0939f89c650621cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_397c6f612653e5126d425d25cae3e2dffd4ffa81cad7c0ac0939f89c650621cb->leave($__internal_397c6f612653e5126d425d25cae3e2dffd4ffa81cad7c0ac0939f89c650621cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_df0bd5d6e66f591ae4955bbea81a9c34c67dd75e27369c2dcc144ba20b40a5a4 = $this->env->getExtension("native_profiler");
        $__internal_df0bd5d6e66f591ae4955bbea81a9c34c67dd75e27369c2dcc144ba20b40a5a4->enter($__internal_df0bd5d6e66f591ae4955bbea81a9c34c67dd75e27369c2dcc144ba20b40a5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_df0bd5d6e66f591ae4955bbea81a9c34c67dd75e27369c2dcc144ba20b40a5a4->leave($__internal_df0bd5d6e66f591ae4955bbea81a9c34c67dd75e27369c2dcc144ba20b40a5a4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_000986b128b47819825f7453a6ed210e5790b4ab167d5629b5b428e2cfe54867 = $this->env->getExtension("native_profiler");
        $__internal_000986b128b47819825f7453a6ed210e5790b4ab167d5629b5b428e2cfe54867->enter($__internal_000986b128b47819825f7453a6ed210e5790b4ab167d5629b5b428e2cfe54867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_000986b128b47819825f7453a6ed210e5790b4ab167d5629b5b428e2cfe54867->leave($__internal_000986b128b47819825f7453a6ed210e5790b4ab167d5629b5b428e2cfe54867_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
