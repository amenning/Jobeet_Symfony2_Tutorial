<?php

/* EnsJobeetBundle:category:show.atom.twig */
class __TwigTemplate_a7e39f6fde7c394ad363ed9bdeb5c54510fff56135b3cc0ae316fc9847e14197 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- src/Ens/JobeetBundle/Resources/views/Category/show.atom.twig -->
<?xml version=\"1.0\" encoding=\"utf-8\"?>
<feed xmlns=\"http://www.w3.org/2005/Atom\">
  <title>Jobeet (";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        echo ")</title>
  <subtitle>Latest Jobs</subtitle>
  <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_jobeet_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug", array()), "_format" => "atom")), "html", null, true);
        echo "\" rel=\"self\" />
  <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_jobeet_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug", array()))), "html", null, true);
        echo "\" />
  <updated>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "activejobs", array()), 0, array(), "array"), "createdAt", array()), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
        echo "</updated>
  <author><name>Jobeet</name></author>
  <id>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["feedId"]) ? $context["feedId"] : null), "html", null, true);
        echo "</id>
 
  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "activejobs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 13
            echo "    <entry>
      <title>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo ")</title>
      <link href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ens_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()), "company" => $this->getAttribute($context["entity"], "companyslug", array()), "location" => $this->getAttribute($context["entity"], "locationslug", array()), "position" => $this->getAttribute($context["entity"], "positionslug", array()))), "html", null, true);
            echo "\" />
      <id>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</id>
      <updated>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "createdAt", array()), "format", array(0 => twig_constant("DATE_ATOM")), "method"), "html", null, true);
            echo "</updated>
      <summary type=\"xhtml\">
        <div xmlns=\"http://www.w3.org/1999/xhtml\">
          ";
            // line 20
            if ($this->getAttribute($context["entity"], "logo", array())) {
                // line 21
                echo "            <div>
              <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "url", array()), "html", null, true);
                echo "\">
                <img src=\"http://";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "host", array()), "html", null, true);
                echo "/uploads/jobs/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "logo", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
                echo " logo\" />
              </a>
            </div>
          ";
            }
            // line 27
            echo "          <div>
            ";
            // line 28
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true));
            echo "
          </div>
          <h4>How to apply?</h4>
          <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "howtoapply", array()), "html", null, true);
            echo "</p>
        </div>
      </summary>
      <author><name>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
            echo "</name></author>
    </entry>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</feed>";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:category:show.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 37,  109 => 34,  103 => 31,  97 => 28,  94 => 27,  83 => 23,  79 => 22,  76 => 21,  74 => 20,  68 => 17,  64 => 16,  60 => 15,  54 => 14,  51 => 13,  47 => 12,  42 => 10,  37 => 8,  33 => 7,  29 => 6,  24 => 4,  19 => 1,);
    }
}
/* <!-- src/Ens/JobeetBundle/Resources/views/Category/show.atom.twig -->*/
/* <?xml version="1.0" encoding="utf-8"?>*/
/* <feed xmlns="http://www.w3.org/2005/Atom">*/
/*   <title>Jobeet ({{ category.name }})</title>*/
/*   <subtitle>Latest Jobs</subtitle>*/
/*   <link href="{{ url('ens_jobeet_category', { 'slug': category.slug, '_format': 'atom' }) }}" rel="self" />*/
/*   <link href="{{ url('ens_jobeet_category', { 'slug': category.slug }) }}" />*/
/*   <updated>{{ category.activejobs[0].createdAt.format(constant('DATE_ATOM')) }}</updated>*/
/*   <author><name>Jobeet</name></author>*/
/*   <id>{{ feedId }}</id>*/
/*  */
/*   {% for entity in category.activejobs %}*/
/*     <entry>*/
/*       <title>{{ entity.position }} ({{ entity.location }})</title>*/
/*       <link href="{{ url('ens_job_show', { 'id': entity.id, 'company': entity.companyslug, 'location': entity.locationslug, 'position': entity.positionslug }) }}" />*/
/*       <id>{{ entity.id }}</id>*/
/*       <updated>{{ entity.createdAt.format(constant('DATE_ATOM')) }}</updated>*/
/*       <summary type="xhtml">*/
/*         <div xmlns="http://www.w3.org/1999/xhtml">*/
/*           {% if entity.logo %}*/
/*             <div>*/
/*               <a href="{{ entity.url }}">*/
/*                 <img src="http://{{ app.request.host }}/uploads/jobs/{{ entity.logo }}" alt="{{ entity.company }} logo" />*/
/*               </a>*/
/*             </div>*/
/*           {% endif %}*/
/*           <div>*/
/*             {{ entity.description|nl2br }}*/
/*           </div>*/
/*           <h4>How to apply?</h4>*/
/*           <p>{{ entity.howtoapply }}</p>*/
/*         </div>*/
/*       </summary>*/
/*       <author><name>{{ entity.company }}</name></author>*/
/*     </entry>*/
/*   {% endfor %}*/
/* </feed>*/
